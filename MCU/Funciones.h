void ledRGB(int i) {
  if (i == 1) {
    digitalWrite(pRed, HIGH);
    digitalWrite(pGreen, LOW);
    digitalWrite(pBlue, LOW);
  } else if (i == 3) {
    digitalWrite(pRed, LOW);
    digitalWrite(pGreen, HIGH);
    digitalWrite(pBlue, LOW);
  } else if (i == 2) {
    digitalWrite(pRed, HIGH);
    digitalWrite(pGreen, HIGH);
    digitalWrite(pBlue, LOW);
  } else {
    digitalWrite(pRed, LOW);
    digitalWrite(pGreen, LOW);
    digitalWrite(pBlue, HIGH);
  }
}