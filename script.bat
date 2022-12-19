echo "Criando as imagens........"

docker build -t tdrummontt/projeto-backend:1.0 backend/.
docker build  -t tdrummontt/projeto-database:1.0 database/.

echo "Realizando o push das imagens....."

docker push tdrummontt/projeto-backend:1.0
docker push tdrummontt/projeto-database:1.0

echo "Criando serviços no cluster kubernetes..."

kubectl apply -f ./services.yml

echo "Criando os deployments......"

kubectl apply -f ./deployments.yml

