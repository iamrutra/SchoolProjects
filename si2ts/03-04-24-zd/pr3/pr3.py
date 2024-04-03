import matplotlib.pyplot as plt
import pandas as pd

# dane z csv
data = pd.read_csv('dec_poz_uzn_org_2023_Kj1jqwG.csv', header=None, skiprows=1, encoding='utf-8')

# lista ogranow
organ_wydajacy = []
liczba_decyzji = []

# foreach dla rows
for index, row in data.iterrows():
    # czy istnieje
    if pd.notnull(row[0]):
        organ = row[0]
    else:
        organ = "Nie ma organu"
    organ_wydajacy.append(organ)

    # info o liczbe
    if pd.notnull(row[2]):
        liczba_decyzji.append(int(row[2]))
    else:
        liczba_decyzji.append(0)  # 0 jak niema danych

# tworzenie grafiki
plt.figure(figsize=(10, 6))
plt.bar(organ_wydajacy, liczba_decyzji, color='skyblue')
plt.xlabel('Organ wydający decyzje')
plt.ylabel('Liczba decyzji')
plt.title('Liczba decyzji wydanych przez różne organy')
plt.xticks(rotation=90)
plt.tight_layout()

plt.show()
