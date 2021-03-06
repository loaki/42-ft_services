#!/bin/sh
# Remove the old SSH certificate in the IMAC
# ssh-keygen -R 192.168.99.103

services_start=`date +%s`
rm -f last.log
printf "##########################################\n\
                Minikube\n\
##########################################\n" >> last.log
printf "\e[93mStarting minikube...\e[0m\r"
start=`date +%s`
minikube delete >> last.log
minikube start --driver=virtualbox --no-vtx-check --memory='3072' >> last.log
end=`date +%s`
runtime=$((end-start))
printf "\e[K\e[92mStarting minikube DONE (in ${runtime}s)\e[0m\n"

printf "##########################################\n\
                MetalLB\n\
##########################################\n" >> last.log
printf "\e[93mInstalling MetalLB...\e[0m\r"
    start=`date +%s`
    minikube addons enable metallb >> last.log
    # The memberlist secret contains the secretkey to encrypt the communication between speakers for the fast dead node detection.
    kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)" >> last.log
    # Deploy MetalLB to the cluster
    kubectl apply -f ./srcs/yamls/metallb.yaml >> last.log
    end=`date +%s`
    runtime=$((end-start))
    printf "\e[K\e[92mInstalling MetalLB DONE (in ${runtime}s)\e[0m\n"

function build_spec() 
{
    printf "##########################################\n\
                ${1}\n\
##########################################\n" >> last.log
	printf "\e[93mSTART BUILDING ${1}...\e[0m\r"
	start=`date +%s`
	docker build -t $1_image ./srcs/$1 >> last.log
	end=`date +%s`
	runtime=$((end-start))
	printf "\e[K\e[92m${1} DONE (in ${runtime}s)\e[0m\n"
}

eval $(minikube -p minikube docker-env --shell=bash)
build_spec influxdb
build_spec mysql
build_spec nginx
build_spec phpmyadmin
printf "\e[36mPlease wait 10 sec...\e[0m\r"
sleep 10
build_spec wordpress
build_spec ftps
build_spec grafana

printf "\e[93mCreating pods and services...\e[0m\r"
    start=`date +%s`
    kubectl apply -f ./srcs/yamls/nginx.yaml >> last.log
    kubectl apply -f ./srcs/yamls/mysql.yaml >> last.log
    kubectl apply -f ./srcs/yamls/wordpress.yaml >> last.log
    kubectl apply -f ./srcs/yamls/phpmyadmin.yaml >> last.log
    kubectl apply -f ./srcs/yamls/ftps.yaml >> last.log
    kubectl apply -f ./srcs/yamls/influxdb.yaml >> last.log
    kubectl apply -f ./srcs/yamls/grafana.yaml >> last.log
    end=`date +%s`
    runtime=$((end-start))
    printf "\e[K\e[92mCreating pods and services DONE (in ${runtime}s)\e[0m\n"

end=`date +%s`
runtime=$((end-services_start))
printf "\e[36mServices DONE (in ${runtime}s)\e[0m\n"
minikube dashboard &

#printf "\e[93mBuilding images...\e[0m\r"
#    start=`date +%s`
#    #eval $(minikube docker-env) # https://stackoverflow.com/questions/52310599/what-does-minikube-docker-env-mean
#    eval $(minikube -p minikube docker-env --shell=bash)
#    docker build -t nginx_service ./srcs/nginx >> last.log
#    docker build -t mysql_service ./srcs/mysql >> last.log
#    docker build -t wordpress_service ./srcs/wordpress >> last.log
#    docker build -t phpmyadmin_service ./srcs/phpmyadmin >> last.log
#    docker build -t ftps_service ./srcs/ftps >> last.log
#    docker build -t influxdb_service ./srcs/influxdb >> last.log
#    docker build -t grafana_service ./srcs/grafana >> last.log
#    end=`date +%s`
#    runtime=$((end-start))
#    printf "\e[K\e[92mBuilding images DONE (in ${runtime}s)\e[0m\n"

#printf "\e[93mCreating pods and services...\e[0m\r"
#    start=`date +%s`
#    kubectl apply -f ./srcs/yamls/nginx.yaml >> last.log
#    kubectl apply -f ./srcs/yamls/mysql.yaml >> last.log
#    kubectl apply -f ./srcs/yamls/wordpress.yaml >> last.log
#    kubectl apply -f ./srcs/yamls/phpmyadmin.yaml >> last.log
#    kubectl apply -f ./srcs/yamls/ftps.yaml >> last.log
#    kubectl apply -f ./srcs/yamls/influxdb.yaml >> last.log
#    kubectl apply -f ./srcs/yamls/grafana.yaml >> last.log
#    end=`date +%s`
#    runtime=$((end-start))
#    printf "\e[K\e[92mCreating pods and services DONE (in ${runtime}s)\e[0m\n"