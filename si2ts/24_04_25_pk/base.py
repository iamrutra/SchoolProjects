class Product:
    def __init__(self, nazwa, price, ilosc=0):
        self.name: str = nazwa
        self.price: int = price
        self.ilosc: int = ilosc

    def ustaw_ilosc(self, ilosc):
        self.ilosc = ilosc


class Order:
    def __init__(self):
        self.products: list = []

    def dodaj(self, produkt: Product, ilosc: int):
        produkt.ustaw_ilosc(ilosc)
        self.products.append(produkt)

    def cena(self):
        suma = 0
        total_quantity = 0  # Общее количество товаров

        for produkt in self.products:
            suma += produkt.price * produkt.ilosc
            total_quantity += produkt.ilosc

        return suma, total_quantity


if __name__ == '__main__':
    p1 = Product("Lenovo", 1.00)
    p2 = Product("Asus", 2.00)

    o1 = Order()
    o1.dodaj(p1, 10)
    o1.dodaj(p2, 10)
    total_price, total_quantity = o1.cena()
    print(f"Общая стоимость: {total_price}")
    print(f"Общее количество: {total_quantity}")