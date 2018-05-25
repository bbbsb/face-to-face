<?php

# juooo.com笔试题
# 1. 举例说明mysql的乐观锁与悲观锁
# 2. 用PHP实现双向队列
# 3. 如何实现多台服务器SESSION共享
# 4. 用单例实现一个数据库操作基类
# 5. 用PHP实现一个Socket服务端
# 6. 如何实现一个死锁
#

$mysql_lock_description = <<<DESC
1. 悲观锁
    分为: 共享锁(读锁)和排他锁(写锁)
    
2. 乐观锁
    实现方法: 加version或者时间戳字段，update时where条件判断version/时间戳是否之前获取的值
DESC;



