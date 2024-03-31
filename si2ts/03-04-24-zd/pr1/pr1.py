import matplotlib.pyplot as plt
import csv

# dane z failu
wojewodztwo = []
wygenerowane_kody = []
zrealizowane_kody = []

with open('Laptop_dla_nauczyciela_dane_w_podziale_na_województwa_27.03.2024.csv', newline='', encoding='utf-8') as csvfile:
    reader = csv.DictReader(csvfile)
    for row in reader:
        wojewodztwo.append(row['Województwo'])
        wygenerowane_kody.append(int(row['Liczba wygenerowanych kodów świadczenia']))
        zrealizowane_kody.append(int(row['Liczba zrealizowanych kodów świadczenia']))

# tworzenie grafiku
plt.figure(figsize=(8, 8))
plt.pie(wygenerowane_kody, labels=wojewodztwo, autopct='%1.1f%%')
plt.title('Laptop dla nauczyciela - dane programu w podziale na województwa stan na 27 marca 2024 r')
plt.axis('equal')
plt.show()