import os

def effacer_ecran():
    if os.name == 'nt':  # Windows
        os.system('cls')
    else:  #  Linux/Mac
        os.system('clear')


print('Quelle est la capitale de Madagascar ?')
capitale = input('1. Tulear\n2. Tanà\n3. Diégo\n4.Tamatave\n\nChoisissez entre la reponse 1, 2, 3 et 4 :  ')
if capitale == '2' :
    effacer_ecran()
    print('Bonne reponse, Tanà est la capitale de Madagascar')
else :
    effacer_ecran()
    print('Mauvaise reponse')