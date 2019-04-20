## 装饰者模式
装饰器模式通过将对象封装在装饰器类的对象中，从而使你能在运行时动态地修改原对象的行为。

维基百科:
> 在面向对象编程中，装饰器这种设计模式允许以静态或者动态的方式，将行为添加到某个对象中，
  而这种修改不会影响相同类中的其它实例对象的行为。
  
一般有两种方式可以实现给一个类或对象增加行为:
 - 继承机制, 使用继承机制给现有类添加功能的, 让子类有自己独立方法, 也拥有父类的方法. 无法控制增加行为和时机
 - 关联机制,   将一个类的对象嵌入另一个对象中，由另一个对象来决定是否调用嵌入对象的行为以便扩展自己的行为

 装饰模式角色:
 - Component: 抽象构件
 - ConcreteComponent: 具体构件
 - Decorator: 抽象装饰类
 - ConcreteDecorator: 具体装饰类

Component 是定义一个对象接口, 可以给这些对象动态地添加职责. ConcreteComponent 是定义一个具体的对象,
也可以给这个对象添加一些职责. Decorator, 装饰抽象类, 继承了Component., 从外类来扩展Component类的功能, 但对于Component来说,
是无需知道Decorator 的存在. 至于ConcreteDecorator就是具体装饰对象, 起到给Component添加职责功能.

以咖啡为例子, 咖啡是具体构件, 实现了Component接口, 实现operation方法-制作咖啡. 而牛奶和香草则是实现了装饰抽象类的具体装饰对象.
都有自己独立的职责, 而抽象装饰类(Decorator) 实现了Component接口, 新增自己一些职责, setComponent来给保护属性component
设置实现了Component接口的对象, operation则调用抽象装饰类的属性component的operation方法, 假如要制作牛奶咖啡, 
通过分别实例Milk和Coffee类, Milk类的对象通过setComponent把Coffee类对象包装进来. 

装饰模式就是通过Decorator的职责(setComponent)来对对象进行包装的. 

使用环境:
- 在不影响其他对象的情况下，以动态、透明的方式给单个对象添加职责。
- 需要动态地给一个对象增加功能，这些功能也可以动态地被撤销

缺点: 
- 增加系统复杂度, 会产生很多具体装饰对象. 
- 过于灵活, 排查较为繁琐