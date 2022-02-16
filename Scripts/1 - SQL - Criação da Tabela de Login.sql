
create table login (
	usuario varchar(100) primary key,
    senha varchar(100),
    email varchar (100),
    telefone varchar(15),
    nome varchar(120)
)

select * from login;
insert into login (usuario, senha, email, telefone, nome)
values ('leandro.rocha', '123456', 'leandro.rocha@gmail.com', '31988887777', 'Leandro Rocha')
;

select usuario, senha, email, telefone 
from login
where (
		usuario = 'leandro.rocha'
        or email = 'leandro.rocha@gmail.com'
        or telefone = '31988887777'
        )
	and senha = '1234565';
    
    
    
select usuario, senha, email, telefone 
from login 
where ( usuario = 'leandro@terra.com.br' 
		or email = 'leandro@terra.com.br' 
        or telefone = 'leandro@terra.com.br' 
	) 
	and senha = '987654321';