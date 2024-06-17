# 学习使用 RabbitMQ 

消息队列是后端蛮重要的一个组件，类似 redis 缓存和 db 一样的东西。 

RabbitMQ 基础使用指南 https://www.rabbitmq.com/tutorials    
RabbitMQ 详细使用指南 https://www.rabbitmq.com/docs/use-rabbitmq    

使用 docker 安装 rabbitmq 
```sh
# 拉曲镜像
$ docker pull rabbitmq:3.13-management
# 后台运行
$ docker run --d --name rabbitmq -p 5672:5672 -p 15672:15672 rabbitmq:3.13-management
# 一次性运行
$ docker run -it --rm --name rabbitmq -p 5672:5672 -p 15672:15672 rabbitmq:3.13-management
``` 

