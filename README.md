# calculator

Following are the steps to run this application on localhost

1. Clone the repository in your directory:

```bash
git clone https://github.com/binalp117/calculatorapp.git
```

2. Install the dependencies of the application using composer. Here we are using PHPUnit Test library to test the application. This application belives that composer is already installed in your system. If not install then use this guidline [Composer](https://getcomposer.org/download/)

```bash
cd calculator
composer install
```

3. To test application using PHPUnit Test cases, use the following command:

```bash
vendor/bin/phpunit TestCases/AdditionTest.php
```

4. To test application using command line without PHPUnit, use the following command:

```bash
php calculator.php sum "1,2"
```