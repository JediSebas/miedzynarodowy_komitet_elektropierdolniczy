import random

A8 = []
B8 = []

ilosc_4 = 0
ilosc_2 = 0

while ilosc_4 <= 2:
    losowa = random.randint(0, 10)
    A8.append(losowa)

    if losowa == 4:
        ilosc_4 += 1

while ilosc_2 <= 3:
    losowa = random.randint(0, 10)
    B8.append(losowa)

    if losowa == 2:
        ilosc_2 += 1

print('A8')
print(A8)
print(len(A8))

print()

print('B8')
print(B8)
print(len(B8))

C8 = []

if len(B8) > len(A8):
    for i in range(len(A8)):
        C8.append(A8[i])
        C8.append(B8[i])
    for i in range(len(A8), len(B8)):
        C8.append(B8[i])
else:
    for i in range(len(B8)):
        C8.append(A8[i])
        C8.append(B8[i])
    for i in range(len(B8), len(A8)):
        C8.append(A8[i])

print(C8)