## 简单工厂模式

> 简单工厂只是为客户端生成一个实例，而不会向客户端公开任何实例化逻辑

简单工厂模式(Simple Factory Pattern)：又称为静态工厂方法(Static Factory Method)模式，它属于类创建型模式。
在简单工厂模式中，可以根据参数的不同返回不同类的实例.

例如: 有一个简单场景-计算器界面,
可以提供不同计算方法的类, 这些方法类都来自一个计算接口. 我们实现了加法和减法, 
当客户端调用我们的加法和减法类时候, 需要分别去实例化, 如
```php
// 客户端
use Patterns\Creational\SimpleFactory\OperateAdd;
use Patterns\Creational\SimpleFactory\OperateSub;
$operate = $_GET['operate'];
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
switch ($operate) {
    case '+':
        $res = new OperateAdd();
        break;
    case '-':
        $res = new OperateSub();
        break;
    default:
        break;    
}
$res->setNumber($number1, $number2);
$result = $res->calc();
```
每新增一个运算类, 我们都需要改客户端的代码. 而且要知道新运算类的名称,引入并且实例. 
导致结果代码过于冗余. 

因此我们将对象的创建和对象本身业务处理分离可以降低系统的耦合度，使得两者修改起来都相对容易. 
抽象出一个类专门去实例化运算类, 客户端无需知道运算类的名称和引入. 此类叫做简单工厂模式.

简单工厂类有一个静态方法, 根据传入参数来实例化同一个父类的对象. 在调用工厂类的工厂方法时，
由于工厂方法是静态方法，使用起来很方便，可通过类名直接调用.
```php
// 客户端
use Patterns\Creational\SimpleFactory\SimpleFactory;
$operate = $_GET['operate'];
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$res = SimpleFactory::create($operate);
$res->setNumber($number1, $number2);
$result = $res->calc();
```

简单工厂模式适用环境:
- 工厂类创建对象少, 不会造成工厂类的逻辑过于复杂
- 客户端只需传入工厂类参数, 对创建对象不关心.


简单工厂模式缺点:
 - 由于工厂类集中了所有产品创建逻辑，一旦不能正常工作，整个系统都要受到影响
 - 使用简单工厂模式, 一旦新增新的运算类都需要去修改工厂类, 违反开闭原则. 
   而且一旦运算类很多, 会导致增加代码理解程度和复杂度
   
   