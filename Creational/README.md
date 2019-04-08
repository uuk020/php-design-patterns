## 创建型
创建模式只专注于如何实例化对象或相关对象组。 创建对象是比较麻烦的, 每创建一个对象都需要new该类, 
假如项目大的话, 每次都需要去new. 创建型专门来解决类的实例的. 一个专门类去实例化, 
而不需要了解该类如何实现. 能够将软件模块中对象的创建和对象的使用分离.
SOLID原则的S(单一职责)

> 创建型模式在创建什么(What)，由谁创建(Who)，何时创建(When)等方面都为软件设计者提供了尽可能大的灵活性。
创建型模式隐藏了类的实例的创建细节，通过隐藏对象如何被创建和组合在一起达到使整个系统独立的目的。

维基百科:
> 在软件工程中，创建设计模式是处理对象创建机制的设计模式，
试图以适合于该情况的方式创建对象。对象创建的基本形式可能导致设计问题或增加设计的复杂性。
创建设计模式通过某种方式控制此对象创建来解决此问题。

- [简单工厂模式](https://github.com/uuk020/DesignPatterns/tree/master/Creational/SimpleFactory)
- [工厂方法模式](https://github.com/uuk020/DesignPatterns/tree/master/Creational/FactoryMethod)
- [抽象工厂模式](https://github.com/uuk020/DesignPatterns/tree/master/Creational/AbstractFactory)
- 建造者模式
- 原型模式
- 单例模式