#include <HX711.h>
#include <WiFi.h>
#include <WiFiClient.h>
#include <WiFiServer.h>
#include <WiFiUdp.h>

const char* ssid     = "yourssid";
const char* password = "yourpassword";
const char* host = "yourhost";
#define DOUT  D2  // Arduino pin 6 connect to HX711 DOUT
#define CLK  D3  //  Arduino pin 5 connect to HX711 CLK
HX711 scale;

float calibration_factor = -125;
float agirlik;
float ounces;
String id = "1";
void setup()
{
  scale.begin(DOUT, CLK);
  Serial.begin(9600);
  Serial.println("HX711 weighing");
  scale.set_scale(calibration_factor);
  scale.tare();
  Serial.println("Readings:");

 //wifi bağlama
    Serial.begin(115200);
    Serial.println();
    Serial.println();
    Serial.print("Connecting to ");
    Serial.println(ssid);

    WiFi.begin(ssid, password);

    while (WiFi.status() != WL_CONNECTED) {
        delay(500);
        Serial.print(".");
    }

    Serial.println("");
    Serial.println("WiFi connected");
    Serial.println("IP address: ");
    Serial.println(WiFi.localIP());
}

void loop()
{
  Serial.print("Reading:");
  agirlik = scale.get_units(),10;
  if (agirlik < 0)
  {
    agirlik = 0.00;
  }
  ounces = agirlik * 0.035274;
  Serial.print(agirlik);
  Serial.println(" grams");
  delay(1000);
  Serial.print("connecting to ");
  Serial.println(host);

  // Use WiFiClient class to create TCP connections
    WiFiClient client;
    const int httpPort = 80;
    if (!client.connect(host, httpPort)) {
        Serial.println("connection failed");
        return;

}

// This will send the request to the server
 client.print(String("GET http://yourhost/connect.php?") + 
                          ("&sensor_id=") + id +
                          ("&gram_agirlik=") + agirlik +
                          " HTTP/1.1\r\n" +
                 "Host: " + host + "\r\n" +
                 "Connection: close\r\n\r\n");
    unsigned long timeout = millis();
    while (client.available() == 0) {
        if (millis() - timeout > 1000) {
            Serial.println(">>> Client Timeout !");
            client.stop();
            return;
        }
    }

    // Read all the lines of the reply from server and print them to Serial
    while(client.available()) {
        String line = client.readStringUntil('\r');
        Serial.print(line);
        
    }

    Serial.println();
    Serial.println("closing connection");
}
