import matplotlib.pyplot as plt
import pandas as pd

# dane z pliku csv
data = pd.read_csv('Laptop_dla_nauczyciela_dane_w_podziale_na_województwa_27.03.2024.csv', encoding='utf-8')

# dane
wojewodztwo = data['Województwo']
wygenerowane_kody = data['Liczba wygenerowanych kodów świadczenia']
zrealizowane_kody = data['Liczba zrealizowanych kodów świadczenia']

# tworzenie grafiki
plt.figure(figsize=(8, 8))
plt.pie(wygenerowane_kody, labels=wojewodztwo, autopct='%1.1f%%')
plt.title('Laptop dla nauczyciela - dane programu w podziale na województwa stan na 27 marca 2024 r')
plt.axis('equal')
plt.show()