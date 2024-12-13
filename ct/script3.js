// 1. Immediately Invoked Function Expression (IIFE)
// Це самовиконувана функція, яка відразу ж виконується, як тільки визначається.
(function() {
    // Виводимо поточний URL сторінки
    console.log("Поточний URL: " + window.location.href);
})();

// 2. Методи роботи з масивами: map, filter, reduce
let numbers = [5, 12, 23, 30, 40, 15, 7, 18, 60, 11];

// b. Подвоєння чисел за допомогою map
// Використовуємо метод map для створення нового масиву, в якому всі числа подвоєні.
let doubled = numbers.map(num => num * 2);
console.log("Подвоєні числа:", doubled);

// c. Фільтрація чисел більших за 25
// За допомогою методу filter відбираємо числа, які більше за 25.
let greaterThan25 = numbers.filter(num => num > 25);
console.log("Числа більше 25:", greaterThan25);

// d. Підсумовування всіх елементів масиву за допомогою reduce
// Використовуємо reduce для підсумовування всіх елементів масиву.
let sum = numbers.reduce((total, num) => total + num, 0);
console.log("Сума елементів:", sum);

// 3. Використання оператора Spread у функції
// Створюємо функцію множення двох чисел, використовуючи оператор spread для передачі аргументів.
function multiply(a, b) {
    return a * b;
}

let arr = [4, 5];
// Викликаємо функцію, передаючи масив як аргументи завдяки spread
console.log("Результат множення:", multiply(...arr));

// 4. Робота з Set
// Створюємо Set для зберігання унікальних значень, щоб позбутись дублікатів.
let uniqueSet = new Set([1, 2, 3, 4, 5, 5, 6, 7, 7, 8]);
console.log("Set без дублікатів:", uniqueSet);

// Перебираємо значення в Set і виводимо їх
for (let value of uniqueSet) {
    console.log(value);
}

// 5. Використання методу bind для прив'язки контексту
// Створюємо об'єкт user з функцією getName, яка виводить його ім'я.
let user = {
    name: 'Іван',
    getName: function() {
        console.log(this.name);
    }
};

// Створюємо об'єкт admin з ім'ям Вадим
let admin = {
    name: 'Вадим'  // Змінено на 'Вадим'
};

// Прив'язуємо метод getName до об'єкта admin, щоб він виводив ім'я 'Вадим'
let boundGetName = user.getName.bind(admin);
boundGetName();  // Виведе: Вадим


// 6. Створення функції із замиканням (closure)
// Функція, яка створює лічильник з можливістю збільшувати та зменшувати його значення.
function createAdvancedCounter() {
    let counter = 0; // Замикання: змінна counter доступна лише всередині цих методів.

    return {
        increment: function() {
            counter++; // Збільшуємо лічильник
            console.log("Лічильник після збільшення:", counter);
        },
        decrement: function() {
            counter--; // Зменшуємо лічильник
            console.log("Лічильник після зменшення:", counter);
        }
    };
}

// Створюємо екземпляр лічильника
let advancedCounter = createAdvancedCounter();

// Тестуємо методи лічильника
advancedCounter.increment(); // Лічильник після збільшення: 1
advancedCounter.increment(); // Лічильник після збільшення: 2
advancedCounter.decrement(); // Лічильник після зменшення: 1
