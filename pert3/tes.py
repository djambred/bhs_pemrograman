# value_str = input("enter value : ")
# value = int(value_str)
value = int(input("enter value : "))
if value >= 90:
    grade = "A"
elif value >= 80:
    grade = "B"
elif value >= 70:
    grade = "C"
elif value >= 60:
    grade = "D"
else :
    grade = "E"

print("Grade : %s" % grade)