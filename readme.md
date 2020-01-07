# 訪客頁面
<p align="center"><img src=https://i.imgur.com/SZQJTpj.png ></p>

# 預約畫面
- 選取房型
<p align="center"><img src=https://i.imgur.com/1kXA5LG.png ></p>

- 選擇退房日期
<p align="center"><img src=https://i.imgur.com/ZKZqsNU.png ></p>

# 單筆預約明細
<p align="center"><img src=https://i.imgur.com/RwnI12A.png ></p>

# 預約表單和取消預約
<p align="center"><img src=https://i.imgur.com/29ECqPd.png ></p>

# 後台畫面
<p align="center"><img src=https://i.imgur.com/AgJMacw.png ></p>



# 系統的作用

## 線上訂房系統

- 讓使用者透過此系統的簡單操作就可以預約房間
- 讓使用者隨時掌握房間的最新狀況
- 讓管理者在一套系統裡就可管控所有顧客的預約資料
- 讓管理者可以隨時修改房間的狀況


## 系統的主要功能

- 訪客首頁(Route::get('/')) [3A632095 朱泰宇](https://github.com/3A632095)[3A632096 蔡侑秦](https://github.com/3A632096)

前端

- 預約房間(Route::get('/home'))[3A632095 朱泰宇](https://github.com/3A632095)[3A632096 蔡侑秦](https://github.com/3A632096)
  - 訂房日期((Route::post('/posts'))[3A632095 朱泰宇](https://github.com/3A632095)[3A632096 蔡侑秦](https://github.com/3A632096)
- 查詢預約的房間((Route::get('/contact))[3A632095 朱泰宇](https://github.com/3A632095)[3A632096 蔡侑秦](https://github.com/3A632096)
- 取消預約(Route::POST('/welcome'))[3A632095 朱泰宇](https://github.com/3A632095)[3A632096 蔡侑秦](https://github.com/3A632096) 

後台

- 帳號管理(Route::get('/account'))
  -  新增(Route::post('/account/create'))
  -  修改(Route::post('/account/update'))
  -  刪除(Route::post('/account/destroy'))[3A632096 蔡侑秦](https://github.com/3A632096)
- 顧客管理 (Route::get('/customer')
  -  新增(Route::get('/customer/create'))
  -  修改(Route::get('/customer/update'))
  -  刪除(Route::get('/customer/destroy'))[3A632096 蔡侑秦](https://github.com/3A632096)
- 管理訂單  
  -  新增(Route::get('/reservation'/create'))
  -  修改(Route::get('/reservation'/update'))
  -  刪除(Route::get('/reservation'/destroy'))[3A632096 蔡侑秦](https://github.com/3A632096)
- 管理房間  
  -  新增(Route::get('/room/create'))
  -  修改(Route::get('/room/update'))
  -  刪除(Route::get('/room/destroy'))[3A632096 蔡侑秦](https://github.com/3A632096)


## 初始專案與DB負責的同學

- 初始專案 [3A632095 朱泰宇](https://github.com/3A632095)
- 資料庫及資料表建立、資料表關連 [3A632096 蔡侑秦](https://github.com/3A632096)

## 額外使用的套件或樣板

前台樣板- [Clean Blog](https://startbootstrap.com/template-overviews/clean-blog/)

-畫面供使用者使用，且使用起來方便且舒適。

後台樣板

-簡易操作的畫面，供管理者使用。

## 系統測試資料存放位置

- uwamp->www->final10->public->final10.sql

## 系統使用者測試帳號

前台-使用者

-帳號:11@gmail.com
-密碼:123456789

後台-管理者

-帳號:33@gmail.com
-密碼:987654321

## 系統開發人員與工作分配
- [3A632095 朱泰宇](https://github.com/3A632095)  (前端+readme)
- [3A632096 蔡侑秦](https://github.com/3A632096)  (後端+修改前端)
