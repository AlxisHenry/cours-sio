def division(a: int, b: int, q: int = 0, r: int = 0) -> str:
    if b == 0 or b > a:
        q = 0
        r = a
    else:                                                                                                                                                                                                                                                                                                                                                    
        q = a // b
        r = a % b
    return f"A = {a}, B = {b} => Quotient: {q}, Remainder: {r}"

def divisionOpti(a: int, b: int, q: int = 0, r: int = 0) -> str:
    r = a
    if b != 0 and b < a:                                                                   
        q = a // b
        r = a % b
    return f"A = {a}, B = {b} => Quotient: {q}, Remainder: {r}"

def nbPremier(nb):
    for i in range(2, nb):
        if nb % i == 0:
            return False
    return True

def old(a: int, b: int):
    q = 1
    d = q * b
    while d <= a:
        if d == 0:
            return f"Loop detected for A = {a} and B = {b}"
        q += 1
        d = q * b
    q -= 1
    d = d - b
    r = a - (q * b)
    return f"A = {a}, B = {b} => Quotient: {q}, Remainder: {r}"

print("\033[94m\nExecute program with user input\n\033[0m")

a = int(input("Enter a number for A: "))
b = int(input("Enter a number for B: "))

print("\n- New program\n")

print(division(a, b))

print("\n- Optimized program\n")

print(divisionOpti(a, b))

print("\n- Old program\n")

print(old(a, b))

print("\033[94m\nExecute program with default values\033[0m")

print("\n- New program\n")

print(division(14, 7))
print(division(14, 14))
print(division(7, 14))

print("\n- Optimized program\n")

print(divisionOpti(14, 7))
print(divisionOpti(14, 14))
print(divisionOpti(7, 14))

print("\n- Old program\n")

print(old(14, 7))
print(old(14, 14))
print(old(7, 14))

print ("\n- Loop example\n")

print(division(14, 0))
print(old(14, 0))
print(divisionOpti(14, 0))

print("\033[94m\nNombre entier ou non\n\033[0m")

print("3 est entier : " + str(nbPremier(3)))
print("15 est entier : " + str(nbPremier(15)))
print("2 est entier : " + str(nbPremier(2)))

print("")