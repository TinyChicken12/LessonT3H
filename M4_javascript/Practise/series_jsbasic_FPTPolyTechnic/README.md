*Object
- Hiểu sâu hơn thì object cũng là 1 kiểu dữ liệu
-this. : Lấy thuộc tính của chính chủ thế (đối tượng) đó.

*Constructor
Chú ý cú pháp ở constructorSaiSai, CONSTRUCTOR CHUẨN XEM Ở 
FILE CONSTRUCOR (khác cái này là có tham số truyền vào):
function tenConstructor() { //Dùng function để khai báo, còn object là dùng var = 
    this.name = ''; //Dùng dấu bằng để gán giá trị cho thuộc tính thay vì dùng dấu hai chấm như trong object
    this.age = ''; //Dùng chấm phẩy để ngăn cách cách thuộc tính và hành động
    this.eat = function (monan) {
        console.log(`Em dang an ${monan}`);
    }
}
var Hoang = new People(); //đặt cho 1 đối tượng mới với các thuộc tính có sẵn của thằng People
console.log(Hoang);