import matplotlib.pyplot as plt
import pandas as pd

# dane z pliku csv
data = pd.read_csv('Zestawienie_Studentow_z_Obywatelstwem_Ukrainskim_w_Podziale_na_Wojewodztwa_2024-03-18.csv', encoding='utf-8')

# dane
wojewodztwo = data['Województwo']
liczba_studentow = data['Łączna liczba studentów z Ukrainy zarejestrowanych po 2022-02-24']

# tworzenie grafiki
plt.figure(figsize=(10, 8))
plt.barh(wojewodztwo, liczba_studentow, color='skyblue')
plt.ylabel('Województwo')
plt.xlabel('Liczba studentów z Ukrainy')
plt.title('Liczba studentów z Ukrainy zarejestrowanych po 2022-02-24 w podziale na województwa')
plt.xticks(rotation=45)
plt.tight_layout()

plt.show()