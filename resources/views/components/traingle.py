side1=input("enter the side1 of the traingle")
side2=input("enter the side2 of the traingle")
side3=input("enter the side3 of the traingle")
if side1==side2 and side2==side3:
    print("the trainge is equilateral traingle")
elif side1==side2 or side2==side3 or side3==side1:
    print("the traingle is isosceles traingle")
else:
    print("the traingle is scalene traingle")
