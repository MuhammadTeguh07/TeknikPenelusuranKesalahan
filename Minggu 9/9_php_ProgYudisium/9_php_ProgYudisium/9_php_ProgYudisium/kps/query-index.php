select *
from (select py.nama_pelaksanaan, count(dp.id_pendaftaran) 
from pendaftaran pe, pelaksanaan_yudisium py, detail_pelaksanaan dp
where pe.id_pendaftaran=dp.id_pendaftaran and py.id_pelaksanaan=dp.id_pelaksanaan and dp.status_lulus='Lulus' 
group by dp.id_pelaksanaan desc)
where rownum = 1
UNION
select *
from (select py.nama_pelaksanaan, count(dp.id_pendaftaran) 
from pendaftaran pe, pelaksanaan_yudisium py, detail_pelaksanaan dp
where pe.id_pendaftaran=dp.id_pendaftaran and py.id_pelaksanaan=dp.id_pelaksanaan and dp.status_lulus='Daftar' 
group by dp.id_pelaksanaan desc)
where rownum = 1

(select py.nama_pelaksanaan, count(dp.id_pendaftaran) 
from pendaftaran pe, pelaksanaan_yudisium py, detail_pelaksanaan dp
where pe.id_pendaftaran=dp.id_pendaftaran and py.id_pelaksanaan=dp.id_pelaksanaan and dp.status_lulus='Lulus' )
UNION
(select py.nama_pelaksanaan, count(dp.id_pendaftaran) 
from pendaftaran pe, pelaksanaan_yudisium py, detail_pelaksanaan dp
where pe.id_pendaftaran=dp.id_pendaftaran and py.id_pelaksanaan=dp.id_pelaksanaan and dp.status_lulus='Daftar' )

(select count(id_pendaftaran) from detail_pelaksanaan dp inner join pelaksanaan_yudisium py on dp.id_pelaksanaan=py.id_pelaksanaan where status_lulus='Lulus') union
(select count(id_pendaftaran) from detail_pelaksanaan dp inner join pelaksanaan_yudisium py on dp.id_pelaksanaan=py.id_pelaksanaan where status_lulus='Daftar')

bisa daftar, lulus
(select count(dp.id_pendaftaran) as jumlah from pendaftaran pe, pelaksanaan_yudisium py, detail_pelaksanaan dp where pe.id_pendaftaran=dp.id_pendaftaran and py.id_pelaksanaan=dp.id_pelaksanaan and dp.status_lulus='Lulus' and py.nama_pelaksanaan='Periode Maret') UNION (select count(dp.id_pendaftaran) as jumlah from pendaftaran pe, pelaksanaan_yudisium py, detail_pelaksanaan dp where pe.id_pendaftaran=dp.id_pendaftaran and py.id_pelaksanaan=dp.id_pelaksanaan and dp.status_lulus='Daftar' and py.nama_pelaksanaan='Periode Maret')

QUERY FIX
(select pe.id_pendaftaran, dp.status_lulus from pendaftaran pe, pelaksanaan_yudisium py, detail_pelaksanaan dp where pe.id_pendaftaran=dp.id_pendaftaran and py.id_pelaksanaan=dp.id_pelaksanaan and dp.status_lulus='1' and dp.id_pelaksanaan='pl0001') 
UNION 
(select pe.id_pendaftaran, dp.status_lulus from pendaftaran pe, pelaksanaan_yudisium py, detail_pelaksanaan dp where pe.id_pendaftaran=dp.id_pendaftaran and py.id_pelaksanaan=dp.id_pelaksanaan and dp.status_lulus='2' and dp.id_pelaksanaan='pl0001' )