import matplotlib.pyplot as plt
import csv

organ_wydajacy = []
liczba_decyzji = []

with open('dec_poz_uzn_org_2023_Kj1jqwG.csv', newline='', encoding='utf-8') as csvfile:
    reader = csv.reader(csvfile)
    next(reader)  # skipujemy zaglowek
    for row in reader:
        # przez if patrzymy czy ma decyzja swoj oraga jak nie to pizemy ze nie ma *zrobilem to tak jak duzo nie ma swojego organu*
        if row[0] != "":
            organ = row[0]
        else:
            organ = "Nie ma organu"
        organ_wydajacy.append(organ)
        liczba_decyzji.append(int(row[2]))

# tworzenie grfiku
plt.figure(figsize=(10, 6))
plt.bar(organ_wydajacy, liczba_decyzji, color='skyblue')
plt.xlabel('Organ wydający decyzje')
plt.ylabel('Liczba decyzji')
plt.title('Liczba decyzji wydanych przez rozne organy')
plt.xticks(rotation=90)
plt.tight_layout()

plt.show()


plt.show()