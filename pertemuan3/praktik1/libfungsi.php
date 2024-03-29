<?php

    /** 
     * PHP Function
        * 1. winRate($jumlah Menang, $jumlahKalah) | Menghitung Win Rate
        * 2. cek_tier($winRate) | Menentukan tier berdasarkan fungsi winrate
        * 3. predikat($winRate) | Menentukan Predikat berdasarkan fungsi
     */
    function winRate($jumlahMenang, $jumlahKalah) {
        //winRate = jumlah Menang / totalMatch
        $totalMatch = $jumlahMenang + $jumlahKalah;
        $wr = $jumlahMenang / $totalMatch;

        return $wr;
    }

    function cekTier($winRate) {
        // Menentukan tier berdasarkan fungsi winRate
        if ($winRate >= 0.7) {
            return 'Mythic';
        }elseif ($winRate >= 0.45) {
            return 'Legend';
        }elseif ($winRate >= 0.2) {
            return 'Epic';
        }else {
            return 'Master';
        }
    }

    function predikat($winRate) {
        switch (cekTier($winRate)) {
            case 'Mythic':
                return 'Sangat Memuaskan';
                break;
            case 'Legend':
                return 'Memuaskan';
                break;
            case 'Epic':
                return 'Mengecewakan';
                break;
            default:
                        return 'sangat Mengecewakan';
                        break;
        }
    }

    ?>
            
       