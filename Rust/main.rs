fn main(){
    println!("Hello, World !");

    // declare a variable
    let x = 1;
    let y = 2;
    let z = 3;
    println!("x = {}", x);
    println!("z = {}", z);
    println!("y = {}", y);
 
    let age = 31;
    println!("Age : {}", age);

    let salary = 342552.23;
    println!("Salary : {}", salary);

    let name = "Hana";
    println!("Name : {}", name);
    let name = "Helena";
    println!("Name = {0}, age = {1}", name, age);

    const PI: f32 = 3.15;
    println!("Value of PI = {}", PI);

  /*  PI = 535.32;
    println!("Update Value of PI: {}", PI); */

    let x: i32 = -200;
    let y: i32 = 200;
    
    println!("x = {}", x);
    println!("y = {}", y);

    let ye: f32 = 3.1;
    let ya: f64 = 45.0000031;

    println!("x = {} ",ye);
    println!("y = {}",ya);

    let flag1: bool = true;
    let flag2: bool = false;

    println!("flag 1 = {}", flag1);
    println!("flag 2 = {}", flag2);

    let character: char = 'z';
    let special_character: char = '$';
    let numeric_character: char = '5';
    println!("character = {}", character);
    println!("special_character = {}", special_character);
    println!("numeric_character = {}", numeric_character);

    
    let decimal : f32 = 64.31;
    let integer = decimal as u16;

    println!("decimal = {}", decimal);
    println!("integer = {}", integer);

    let character1: char = 'A';
    
    println!("chracter1 = {}", character1);

    let m = 20;
    let n = 2;

    let v = m + n;
    println!("{} + {} = {}", m, n, v);

    let c = m - n;
    println!("{} - {} = {}", m, n, c);

    

}

