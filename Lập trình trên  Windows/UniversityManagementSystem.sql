
CREATE DATABASE QLTruongDaiHoc
GO

use QLTruongDaiHoc
GO

CREATE TABLE NguoiDung (
    id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	fullname NVARCHAR(250),
	username NVARCHAR(250),
	password NVARCHAR(250)
);

CREATE TABLE Khoa (
    id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	tenKhoa NVARCHAR(100) NOT NULL
);

CREATE TABLE LopHoc (
    id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	tenLop NVARCHAR(50),
	diaChiLop NVARCHAR(250)
);

CREATE TABLE MonHoc (
    id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	tenMonHoc NVARCHAR(250),
	tinChi NVARCHAR(250)
);

CREATE TABLE GiangVien (
    id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	msgv NVARCHAR(250),
	hoTen NVARCHAR(250),
	gioiTinh NVARCHAR(250),
	ngaySinh NVARCHAR(250),
	noiSinh NVARCHAR(250),
	danToc NVARCHAR(250),
	khoa_id INT NOT NULL,
	FOREIGN KEY (khoa_id) REFERENCES Khoa(id)
);

CREATE TABLE SinhVien (
    id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	mssv NVARCHAR(250),
	hoTen NVARCHAR(250),
	gioiTinh NVARCHAR(250),
	ngaySinh NVARCHAR(250),
	noiSinh NVARCHAR(250),
	danToc NVARCHAR(250),
	khoa_id INT NOT NULL,
	FOREIGN KEY (khoa_id) REFERENCES Khoa(id)
);

CREATE TABLE Diem(
	id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	diemLan1 NVARCHAR(50),
	diemLan2 NVARCHAR(50),
	ketQua NVARCHAR(50),
	sinhvien_id INT NOT NULL,
	monhoc_id INT NOT NULL,
	FOREIGN KEY (sinhvien_id) REFERENCES SinhVien(id),
	FOREIGN KEY (monhoc_id) REFERENCES MonHoc(id)
);

--drop database QLTruongDaiHoc

--drop table Khoa, LopHoc, MonHoc, NguoiDung


--select Sinhvien.id, Khoa.tenKhoa from SinhVien, Khoa  Where SinhVien.id = Khoa.id;

--insert into SinhVien (mssv, hoTen, gioiTinh, ngaySinh, noiSinh, danToc, khoa_id)

/*
select SinhVien.id, mssv, hoTen, gioiTinh, ngaySinh, noiSinh, danToc, Khoa.tenKhoa 
from SinhVien 
	left join Khoa on SinhVien.khoa_id = Khoa.id
*/

/*

insert into SinhVien(mssv, hoTen, gioiTinh, ngaySinh, noiSinh, danToc, khoa_id) 
select N'SV2', N'Hà Văn Được', N'Nam', N'18-10-2000', N'Long Khánh, Đồng Nai', N'Kinh', Khoa.id 
from Khoa 
Where Khoa.tenKhoa = N'Hệ thống thông tin'

*/

/*
update SinhVien 
set mssv = N'SV8', hoTen = N'Ha VAn Tam', gioiTinh = N'Nam', ngaySinh = N'18-10-2000',  noiSinh = N'', danToc = N'', khoa_id = Khoa.id 
from Khoa 
	inner join SinhVien on Khoa.tenKhoa = N'Công nghệ thông tin' 
where SinhVien.id = '8';
*/

--select * from SinhVien



--ALTER TABLE MonHoc ALTER COLUMN tinChi NVARCHAR(50)

--INSERT INTO MonHoc (tenMonHoc, tinChi) VALUES (N'', N'')

--UPDATE MonHoc SET tenMonHoc = N'', tinChi = N'' WhERE id = ;

--SELECT * FROM MonHoc



--INSERT INTO Diem(diemLan1, diemLan2, sinhvien_id, monhoc_id) VALUES(8, null, )

/* show list
SELECT d.id,s.mssv, s.hoTen, diemLan1, diemLan2, ketQua 
FROM Diem d 
	LEFT JOIN MonHoc m ON d.monhoc_id = m.id
	LEFT JOIN SinhVien s ON d.sinhvien_id = s.id
WHERE m.tenMonHoc = N'Lập trình trên Windowns'
*/

/* thêm mới filed điểm
INSERT INTO Diem (diemLan1, diemLan2, ketQua, sinhvien_id, monhoc_id) 
SELECT 
	N'8', N'', N'Đạt', 
	(SELECT id FROM SinhVien WHERE SinhVien.mssv = N'SV2'), 
	(SELECT id FROM MonHoc WHERE MonHoc.tenMonHoc = N'Lập trình trên Windowns')
*/

/*
SELECT *
FROM Diem 
	INNER JOIN SinhVien ON Diem.sinhvien_id = SinhVien.id
	INNER JOIN MonHoc ON Diem.monhoc_id = MonHoc.id
*/

/*
SELECT SinhVien.mssv 
FROM Diem 
	LEFT JOIN SinhVien ON Diem.sinhvien_id = SinhVien.id
	LEFT JOIN MonHoc ON Diem.monhoc_id = MonHoc.id
WHERE SinhVien.mssv = N'SV2' AND MonHoc.tenMonHoc = N'Lập trình trên Windowns' AND Diem.id != 400
*/

--UPDATE Diem SET diemLan1 = N'', diemLan2 WhERE id =

--SELECT * FROM Diem

--DELETE FROM Diem

--SELECT * FROM SinhVien

--SELECT * FROM MonHoc