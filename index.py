import os

note = 0  

def effacer_ecran():
    if os.name == 'nt':  # Windows
        os.system('cls')
    else:  #  Linux/Mac
        os.system('clear')

def quitterApp():
    global note 
    if note < 5 :
        print("Vous n'avez pas eu la moyenne, vous avez obtenu une note de", note, "/10")
    else :
        print('votre score est : ' + str(note) + '/10')  

    rejouer = input('Appuyer sur "q" pour quitter ou sur "r" pour recommencer: ')
    if rejouer == 'q':
        effacer_ecran()
        exit()
    elif rejouer == 'r':
        effacer_ecran()
        play()
    else:
        effacer_ecran()
        print('commande non reconnue')
        quitterApp()
        

def play():
    global note  
    
    print('Quelle est la capitale de Madagascar ?')
    print('"q" pour quitter')
    capitale = input('1. Tulear\n2. Tanà\n3. Diégo\n4. Tamatave\nq. quitter\n\nChoisissez entre la reponse 1, 2, 3 et 4 :  ')
    if capitale == '2':
        effacer_ecran()
        note += 1
    elif capitale == 'q':
        quitterApp()
        

    print('Madagascar se trouve dans quel continent ?')
    capitale = input('1. Europe\n2. Amérique\n3. Afrique\n4. Asie\nq. quitter\n\nChoisissez entre la reponse 1, 2, 3 et 4 :  ')
    if capitale == '3':
        effacer_ecran()
        note += 1
    elif capitale == 'q':
        quitterApp()
        

    print('Madagascar se trouve dans quel océan ?')
    capitale = input('1. Indien\n2. Pacifique\n3. Atlantique\nq. quitter\n\nChoisissez entre la reponse 1, 2, 3 :  ')
    if capitale == '1':
        effacer_ecran()
        note += 1
    elif capitale == 'q':
        quitterApp()
        
    print('Quelle tropique passe sur Madagascar ?')
    capitale = input('1. Cancer\n2. Capricorne\nq. quitter\n\nChoisissez entre la reponse 1, 2 :  ')
    if capitale == '2':
        effacer_ecran()
        note += 1
    elif capitale == 'q':
        quitterApp()
        
    print('Quelle est la première langue officielle de Madagascar ?')
    capitale = input('1. Français\n2. Anglais\n3. Malgache\n4. Espagnol\nq. quitter\n\nChoisissez entre la reponse 1, 2, 3 et 4 :  ')
    if capitale == '3':
        effacer_ecran()
        note += 1
    elif capitale == 'q':
        quitterApp()
        
    print('Qui est l\'actuel président de Madagascar ?')
    capitale = input('1. Marc Ravalomanana\n2. Andry Rajoelina\n3. Didier Ratsiraka\n4. Zafy Albert\nq. quitter\n\nChoisissez entre la reponse 1, 2, 3 et 4 :  ')
    if capitale == '2':
        effacer_ecran()
        note += 1
    elif capitale == 'q':
        quitterApp()
        
    print('C\'est quand la fête nationale de Madagascar ?')
    capitale = input('1. 25 Décembre\n2. 01 Mai\n3. 14 Février\n4. 26 Juin\nq. quitter\n\nChoisissez entre la reponse 1, 2, 3 et 4 :  ')
    if capitale == '4':
        effacer_ecran()
        note += 1
    elif capitale == 'q':
        quitterApp()
        
    print('Qui est le premier européen qui a découvert Madagascar ?')
    capitale = input('1. Emmanuel Macron\n2. Napoléon\n3. Diégo Diaz\n4. Christophe Colomb\nq. quitter\n\nChoisissez entre la reponse 1, 2, 3 et 4 :  ')
    if capitale == '3':
        effacer_ecran()
        note += 1
    elif capitale == 'q':
        quitterApp()
        
    print('Comment s\'appelle le lion dans le dessin animé Madagascar ?')
    capitale = input('1. Alex\n2. Simba\n3. Mufasa\n4. Basta Lion\nq. quitter\n\nChoisissez entre la reponse 1, 2, 3 et 4 :  ')
    if capitale == '1':
        effacer_ecran()
        note += 1
    elif capitale == 'q':
        quitterApp()
        
    print('Comment s\'appelle l\'équipe de basket malgache ?')
    capitale = input('1. Barea\n2. Scorpion\n3. Sifaka\n4. Ankoay\n\nChoisissez entre la reponse 1, 2, 3 et 4 :  ')
    if capitale == '4':
        effacer_ecran()
        note += 1


    quitterApp()
    

play()
