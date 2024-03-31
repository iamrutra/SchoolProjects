import matplotlib.pyplot as plt
import csv

wojewodztwo = []
liczba_studentow = []

with open('Zestawienie_Studentow_z_Obywatelstwem_Ukrainskim_w_Podziale_na_Wojewodztwa_2024-03-18.csv', newline='', encoding='utf-8') as csvfile:
    reader = csv.DictReader(csvfile)
    for row in reader:
        wojewodztwo.append(row['Województwo'])
        liczba_studentow.append(int(row['Łączna liczba studentów z Ukrainy zarejestrowanych po 2022-02-24']))

plt.figure(figsize=(10, 8))
plt.barh(wojewodztwo, liczba_studentow, color='skyblue')
plt.xlabel('Wojewщdztwo')
plt.ylabel('Liczba studentщw z Ukrainy')
plt.title('Liczba studentщw z Ukrainy zarejestrowanych po 2022-02-24 w podziale na wojewщdztwa')
plt.xticks(rotation=45)
plt.tight_layout()

plt.show()
