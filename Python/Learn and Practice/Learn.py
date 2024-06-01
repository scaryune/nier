# Variable always on top
first_name = "Débora"
last_name = "Scarlett"
full_name = first_name + " " +last_name
age = 23 
cars = ['bmw', 'audi', 'mazda', 'subaru']
first_car = "My first car was a " + cars[0].title()
dimensions = (200,50)
even_numbers = list(range(2,11,2))
my_cars = cars[:]
my_cars.append('ford')
squares = []
banned_users = ['andrew', 'carolina', 'david']
user = 'marie'
message = "Happy " + str(age) + " rd Birthday!"
print("Hello " + full_name + ' !')
print(message)  
print("\nYou like : ")
print(sorted(cars, reverse=True))
print(first_car)
print("\nOriginal dimensions:")
for dimension in dimensions:
    print(dimension)

print(even_numbers)
print(my_cars)

for car in cars[:3]:
    print(car.title())


for value in range(1,11):
    square = value**2
    squares.append(square)
print(square)
 
if age < 4:
    price = 0
elif age < 18:
    price = 5
elif age < 65:
    price = 10
elif age >= 65;
    price = 5
print("Your admission cost is $" + str(price)+ ".")

if user not in banned_users:
     print(user.title() + ", you can post a response if you wish.")
