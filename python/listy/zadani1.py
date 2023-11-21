lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

print(lista)
print(lista[-2])

suma = 0

for i in lista:
    suma += i
    if i % 5 == 0:
        print(f'{i}:{lista.index(i)}')

print('Średnia')
print(suma / len(lista))

lista.reverse()
print(lista)
