# Download project

### Clonar
git clone https://github.com/mrdaniel77/MakeYourBurger.git

### Acessar
cd MakeYourBurger

## config Backend
### Instalar dependências do projeto
composer install

### Configurar variáveis de ambiente
cp .env.example .env
php artisan key:generate

### Configuração do JWT
php artisan jwt:secret

### Criar migrations (tabelas e Seeders)
php artisan migrate --seed

### Criar link simbólico storage/app/public para public/storage/
php artisan storage:link


## Login

email: admin@email.com
password: 123456


## Config Frontend

### Atualizar dependências
npm install

### Rodar em ambiente local localhost:8080
npm run dev

### Rodar em ambiente de produção
npm run build

