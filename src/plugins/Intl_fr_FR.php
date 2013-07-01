<?php
if (!class_exists('Intl_fr_FR')) {
    class Intl_fr_FR {
        public static function init(&$messages) {
            $messages['fr_FR'] = unserialize(gzinflate(base64_decode("
vVzJctxGmr7PU6AZtklFUCSLZHEpyXaotVjqJiWGSMnj00QWKqsqRRQAJ4AiKYcfoN9ibmP1YU7zBnyx+b8/FyABFEnbPXORikAuf/77lhCj3cHx6JditDNaW3siRoPB6Bc12nliH6jRgH7uDUZrZzr7JOPy8ZvJ449SFypLR9Hf9Zvz82gq5eTfMHSXhu7StLN3F4+faylKGvT4hSjlKOL3e/SeNqP3j9/LpSpar/fx+mi0diKK8vGFFmmRiDLT9u0Qbw/wNp1VYiYfX0ixsO8OsPFx/W4UvaLpt/8lVBFt4GcsH/HAQ7vF6ZvTl/UxBls7/PaI3u4T/M+ztJQpwXCT01KlvC6380So9EkUz4UuZPltVU4fH/GcY6BntzEHcE+lfvwyjbOJSmej6GisSh47AFr3afBZUmmRPH6V6UUxitKc/yy+3X0SmZ/fbqTRd9Hg0ROa9itNoWM/F2mUZmUUA68y+rqIJkoTPTJ9s0lgyfgyyqVeqAJHKpiSjpBDmv5mkWf0apzIaCJpkdsvUkf4A0/p59fFZrS8/aLVVMnP9IKW15kqC97/YLfeP9dZSdsGAERXqpxHW/NSxLEsivvgORq24cGit19mbZAisZRxVKXRVMVzPGpssRJYYuC1H3WWzqIyu5RpsPMukf5vssxSbFrcfokrrWjjSKVLkaiJNAvsESNlM0XbCpXIyV/CJfZHa7f/wAGxRiKiOEtTeU2HjP7C0w9Ha+dqltKawbxjZhEzksdBUJ7PiWFldJNVOspFUVxlehLuduAG6WiZlVpGC6IBMEajDbgEz2uZ5ME0evbMHYdW+JBPiGeCEQMi6akqZHT7n9En2t6c/IhZk45eRAuRkiAtiKXDeXSOH2QBySYwCvArhnvE0RmnakY8XPI5mzO7bzFnl/B1MZdE4oQREQk6ZKlvFBMwqvIkE5OI5Jh4ZCzGyU00VjOgoyS0RFdzUdIven0lx4XUS3oR03NwSV5GG18Xj7ais0QKOqlbKo2KhUgSjJxX6WWxFYI5JO48kZ7lfq4kYb4qIuI6cUMPJusyXWb4RWggSLOc3ifVQqWyuia66EiLPM90CdTGkhegozFwILOsSgseLWEAfMlLfwZdSTAnFckVOKsk9rPyin91SvBsOZpCgHSLNgP3uIFfsMJkEokolVesqUP+IqI8I/oDlgoCXi2lqKJpUl17khal0FoS4kq5KDrMIHSpYoggyQHOePulZobzO2c+WzGTIH45UeHRjiB09NAda485lckaW56yYlTMwUCJSi+JhLoIl9knDH2UFdD6uZ7oRCtRMjWyRRicWWVAclKlpHN7T3HQOH9KEpFUVmHSGX5iaNQiJxKKdAKmI57YyOhhWeVq8oipEWFpgkBhgasapknIlYeEzY8MpF1RllFRkYIdS1qyskvKR8RpcQk2o2OAiMyjY5zLrXz7xbDQkTFZKq1kj57i50YpgEVqO0/iQ/yQJF35hqp603gJEOp5vBSIniT8d9HRDRcQMiCyZj6SxBcktSom7TXpYV7SoK9wyMntl08kbDkdrmCFZcF+xQAXbLdExCo++vfTk45JOLHIondRug6UkXqNGiZhn+j5BuQntXgTzcksRWNJSIV5oy0KRQ4GSSxNrLqq9oCO/YLO5TmFVMCSwIxu/8kKXaQ/VyItyYjJvCJoSfJZ2G9/w9u2jga85IqR4VwYs1vOV28NZ4YH3/62kMaa3r06UP4hvSRWTFnh0i4hoQ6bC9KxyaRVPHNIcL2CDiezDa0WXREKi4qt9bRKSG/TevhDTkbR1xOW0CJSrK5adD08CjSwW1BEt19grONMw+9g20T6V7AFt2tKslwZUMsjzepeI+FwAYhzApGMRWUPzCZoSj6ZKLei5+zCSOvEbcIkwR5puciI+lDgIBkEG2/EjNzDrehtRraIDBfO7o7WMi8Hh72HS6U5V5FntCTYj8gCz4fBYXG2M+zxt6KPtQe0znCSzmKbHAst4hIEJj+JtESu1cL6SQ5uUh9wAY1J24reQ0OIFta8nmAx+vD+pGNs6Fk0aVgL8CaMTSFZDZHIZgkxWwHEdaQXfrAzPezCGbevgF+G6Qreko6a1ujYWIbuWqAs2wfjQdYa5CCwfgxNR2n12D8Li7cAWOMP2c89ev+BZGycZZek/y8TQjwhQ6y2yEPa7kOpEpJMPktzZg6TIu7Y7pgmv9BiZlwiNoK0G9tFtw6IkSVjoTcjMkVazebl45hU7CXZN2bneJ5lBPFf7fjoAkud0FJbWyErHxO1f0igATUcFGM9Kfix1nQM248YoAAh4ciQnZqK2/8uidgEPDY1fnvEao82g6uUg4uLyi/pafAumfT7yOxLpDG27zjHmPiW0NzvXJN2fGtR2JlpQq5YJqFqwlZplTjegLMPa5Cu2mNvHyNoj5nQE3YE01U7whNuGNoFaRTSsEYBtI0t/J839Tt4x6SMVS5YkjqGF3LQWLpUZSI7OLxQIFt38u4gmIy4fUz8Wd6EyCQR/OhekRbpAQK2oxqD7M03LSgaO+UY/HNlsHO0D2KR/i1KrVg7bEXP0psMilOA8hM1vfFeDmNlM2IGJl1a+2+b1kwaJ6TN0gNEd8+quKJVg53erlt1Tu68Mj487wiFbGLA1rYENlT1gqxkYv0aZ//pvSyBamt4vdPD0NjI8MyE2YSFFbjCoCauTAR9+8WgegeauMaOCZrNmVnIGRfRmI6RpWSaEXf9C7F4QBzTgzGCgqIb1unX1jsta69ogWRNIUm22LBzzJVDVj4/BNVNBNd4vxfVHPFqtcRZVjHlYQvRaumwPCAavGvibwWe8ev/BM+k3c57MXY3qhE8/H8jmljifC6ETlTXldi3roRE9IYhzvN4l7N2G7UjFPs8GnnF8tUvlU5+HTHa2PB1zLwZQY6iC/OSdXsOL3Rf/cKa0S3TVZNwcOpBpVOY4UrsZ371y1IJLDQlZ4JVeTaNvknKJ4Dtm1n5hJkCD2aVmpgHWExNp1KDLGYBRC+SwoMEZnsUPSUvT35HL4KZT7f5cUuTDWogCmUMzwLAGnAY7gAeYooAnAJ+NOAhN5N9RgvRUpAo3wsK6LcHCMgXJAieki7N0tl3LC1iKVQiKLZ4um0fm0jmE70oYq3y0i3vHUnkYPuOCYenvUdDIkRrG46Auttgddn0O2+/NA8CVMprwXE3A2q5NGTL3V2Mkibexz52lGPS3dC4UYhv06cUwAMrZMxNUARZmhBewQ+c8SVOp0CUJmz6MzJ/xiblDB4RaZbeLNRnafRMC50eAY9aXjOx83sLB5IGG7VWyJ0Qc0y1yT8XpFIU3FbDGwhSDGzEIRRk1dAl0sJWcTxS652idJASshs6qEWXJrycSiLZdGvPyzIfbW+bZbbKbPv7JhclCSmq4pKD4tcXF2f/8f7lq5fvX77frFV0UmRRRQ6uWzDNtCSZ01LXC5VmyOuL05MhTCt5sS13ZzDcfxhMBA70poAEhhA1FS+ZbmFxYRXpXeAxcSofJAgGUSsTvjHQJmtBAvhCFRABwjUn4oku2aWS0Vx9EvElQlWbz287mDAtL4ioFEiqpd/EjmTqavZml1nCetsuz+Enb2Fi7sND5K8RSXNEQtoQdJhJaJaCM+cs3tmUmAXxiBmgozdniJE0jGnM6e/CjAkN4BEnq+K5NVjIBpKqY7ze/hNhRpGZTAtxqN2MjoQ4hIfhCII3kdjQbOTm1P4BO/jGMsbG2w7lHlFpquVMEXmsgWyN/tVoh8CLkKznY9lajPMrt1+M0o17nXkU407FtVpUiyitFmPak2yL9ehuug7MHnvOizHnmsy0yXqdjBK6jh/3OVwi+KzbQXIwpn/FpUQoQn85XdSNSIbEbG8JzWAEmgkPupldMjxrMl7EqqQLwEWLvJS+wuXONJGJuKF9yyuk2KYNcDYUUm4phb9FqMmgyIhbE6H8EaXhUBFCMbFuSbQhm0v9ajMBFWd4BIL969I4AVnelY2h80DY+BNXIftMZjFDNIYgFgk9uHwmusPu3kWg2JbcTZukBGleZKzlA+fvak7geRjCCPQAJKqj5doJa+wR01lpjwfDgTwhH56hiCvNLsgDoEEp79SA0jg/67EuNB7Qh4LVQxNOD/TRZP8P0ES4bANvKR9IkpxrA00nZGc1SZrmz9QLeUuLkgdD9VACdWAb7OyspFB/ePpnwEQA/5YwxzUK7EGyeyPDGgxSZmei4NQqkQhDb79grIuqHNHnpGj6SA0dWZM6FqT/m0czVAS+kitxQzZgnl250oWNzMhutupCtOSpsWllVkFT1KUIk9Oi42KW9BrE68tndutYIMnNQPNuTJSdqFE8ClXWEAmmFuxGcNzGCJzhaO042tgakw96GE3TLCYK3osnM6yNp+Gh53YRnONTtcih/h2rsS7kI6nSmeRQLx2zEBBzkLHNExEbSWgfLpD1UE3VRU67gUHxYRvFDjT4eAF4eVaoDhb2YcEbQD0EIG/6kfediqUis9eHYXBZQ+msc2rWcIiZZGz/sFYporEgC6zNjEO0wF+w5Myj291qI2t+s4fBbdLYiIvNt/9jMm93Mu62E/QavX8GqB2XAP+XgAMv4kdBTIC+mTfAZS7TCWo6kXWyyXe0m2yJPC/yrNwiPbYdGgPykJ6ViI1AmpFzlV0ZXhEb3Lea1bnIkBHDc2BhNI1nh9TWm7npIBRt2p6zWQFGaCCEuSiz+BJeKHLcxge1rQG+Xn+mJXcq9Ml0YOZQ8ERHkuvTsLGq5bXcLsNE2+ow7tvmfM9PATUGR4c1NE7UWOsbb5MU6pjCiJnOqnSyZSoFM/QnkZTKdI70eVTk4KSCgkhTFWYdQgEVSGxrIFiMa2eSaU6RV2FrFqQWOJRdwFJww0dKq0GVm0BiYk7KGpZ0A6uEGr6tlt05Nr61PfF9Nm8rei7xTOoFwpV1QeFvojJtgg0tcjVxie6aBkadIILQ7IBM1l2ZJnGbmZMSV8ZYfinqQG4sRUW752iqYZBwflMhYCPsYpsUlZGCokYQrcxW2+8tX1ewLAG8m7KQShn1pRiH2hJePODXNUuYqipLb30YikMTWTuxoYa+dxuI+TvepM/43bfhrjN9NixoZTs6BzqVpQ8A2vu1Mg9tF1A8cJuhdQFl6Wq3D96tXfZB1mRVeLg37ISHlZnRU25BYPqTzXpkGslgFPxM/Voa94xFGEKDNbaicySJvRnF8EQi+JUUp920ZO4KhhtT7VJc1sxzSeFkc81uYeBjI+1BYJkqL0JyW6g2ETTJmvEKLSMkDsY36USZRHQDUrLuhUJBGwtRFMg1ySVcMQ47uQVr3S8ZpesEqdA8jukVbOGakD4qeRVin55VdV0R7+GCd7xJ5H8/ZsochJPEhfds3SR5nUO4u6UGP9Fm0KxdNFX4kBv2TfuLb9x47XzPHphgONjd1CtcWSxw7lzlvgWGzkVetcIBd1eULWNon2rpzRvvAm3d9Saam3QUW11xxQIrm7KQo/eANvVis0ELEbxuNwOYhw7SA7sRNw309JLtDVv7cAna+joS7TNy4XsI3GKkDPsXOwgXs0Xi6/7VdlxLJ9DYrePCCQ3LMb4jz07r64QYsqIMazhhI8Sgnt+pRu72za6Za5eDUB9Nd7roTlsVU481M4uYpW8mnB1z2t7px3a6OW3/Cof13o3W43CdQ7cO9HPvKvvBKkyzcIn9+vyGcTu13BADzUDvKMRC3/xhLx4ai+wOOrjoWcdkFldgownScQsjfTAdrcJJY6Ej29DTYeNdeyBUHMoG/5n2ny73Do6CBqAm28KaNzOvYgbP804zu38UmtmmleX5qxocbZtgp2WkUR1EVPHGWFJjQrNolgGSpYLCQyDcn2pDhuvceoBFVs0FjWgVeuukLtxcPLe9XjZJ4/trz9ppIv/sd0DYyTUd7N0LIeYE4MkmfLJuHX7j0tndjNZho3UY2evcAz7sAG4L7T1p8s66uCXRhb6uiHMBdcw+vejdHp1bre1Nn1eQR6SIEvcPOJtueDEkxHEfFOQGj0kckH+Dau1Xd+jo1VkaFu47+jJowQdjx9r2VIPrnb/IBTKugH4zzXQsbTmUMwP42/rEoXuHRtemd+cDm76V+CD8RLez9FteZV1451tSRHUTzeltWHXloI5xElqfEikJ4z/MKbaWrlcAuRhLpNjeaMFZr2ayNDVCNPiiozOf54xfsDuFMjLcFnnv8zocsweGK+kPbZZ0twZc722iZqb2bteWvJHjfwvk8TED6UWuyJLKNDw45zvTl74l1d4IAtUMUbAi97Iyk9Ej0biqA7dSKE6wdFufzhVjrN4vlNQUnkNqWzNNBbg+YX2tqHFhpwGR87GdVWG4jJMLaRn5YOgCGYJCoqHZpAHAoRx9tUi/h8Iboa5sXAJgQeUJjPFRO6AjjpuZHsy77yjBofnYc8XIXvKBt/xemqjKNrl27NGFVq3WVn91YVWTbP2s4+wPj+9vl0VayTuN4XMj4QNAzQHgH9j9ZZrI5Z/Yne9VNdOJnSagk56wZAfpWyzVdRKOrJMQNAx7f/NDWvTP814josbOVE6g0cRS3oUP8N55ELCuxPkR8x5UC8kpsiPOOEzMLnDrwp2+D7UqB4VVIj8/ZnWzpLiVo9hGwLxOgYdcmMt0vaBE3/vDvbq/uXQnaC5t9JYG3d4gzasV7aR7vp20CqMAnoB7Fg/pJx/sNcHtzDj2M7jkHMw8sDMJH5xq6dxGM5cy3Lt+OHsl+wD0tNzfRsfb/i5zaIu3fa3lDsqV7QCDnnxPvSMYmRig7+YHkj8XcpEXrhCOrgSFzGozJEQL9xqSVGub0dpCXK8h5yMa7pItkWN6YRKwZthETtFDRlR5KqI5Qf/t2vdGB699F/gfT7dFqzFtp7tnZfJ8xruSflPiT2hgdCYR0HZjQoayfebdrdtti2Z3i6qTFZdkoOpf3HElplYIvb2hTTXQ4iETa/WIx0FDPJoMAXqfNFJuXkt0gtaTTpLLqwPvDf5d3owzoScogeoyrsqujXpP3jlNjlURxYlYNjMMNJtONJNpN1Y9wV1d+C7QNuRpkSkt3AWN8xxVtkt501UIPJD8BYzww+dqWnaHH/jhC/GpKuLK9VbC7uLOAsU6OrvqTIQTYydOk9vf8D/AhOmuE1Ancvr75s8EnniRNbFJSuia9fjYhNW3/pXzelpZrCGboNksaVUwN5A53yRS4AYGP1G2BEekuQp7Xg6HKHGTO5CyBWjXVDeQxFd6k5hWL4IRzhVdVpaAdYYSefnTZocBw+Bbkqcu65Zpn3+bdtMhw2PfcnBHE0ihbCYA8m9/oVG1qnur/xAoptsaFQg3c4M8/GmVBLjkUXbilLOWrd7I/d0/dQhEtaaM0kMaxAiODnzzudQuLYJ5NGMKB9rd5zIEeuQF4IcMiqE/S8AtM3y5eWVXDV/h5iV8gNFZxvRPdJZphAN90HRi6t1hc5lVHSMtYLqrHPes0oxMfC9GCzM1K6iSm8dWiNLB8C6kmetJXNUjgYo2+uXnke9j68HtgwE5vg/tvweYXe6gbwiC0yi9lb8DU5JTfcrkjuLfcMUe7u8rlU6ysI4Cl/jurehAU5mabkHTgVp3Y/L97uZuHf4/M/e3e1Y3Scf9RkLVXrPwP6OpzhZ+edMFoVe+Xp1YZjfH6o9OJWOzr2pbuRypwQPpk95BdVI2VEVeHk+RqFxhnAYt42TSmi1Rfp0tZI8QHvQI4WSd/IdKqsQ3ptovWiwbtTEgsLfcBYlt1cm4ftffPe4jeVOV0abVKuxP6XPYcXfblVY469NfBNsOgvR9+xECT2oToQFpG8QMm470BAZ2bnWj7jWS0aIRidX9dBvIT20yMQ1YAKFWIbbM8kc2R4m1XYm5FwbVAeIYmQLu+/A9FWg2oN+vhvCaIOKLzOB+TJ5U0Ub7Ad8tMJ0RutFcwdwqrNeIxZzA50mFDy8wQSz7kudf+LSQZU6Z5GapDe4ox88QAXsrGBXcshETZqSbZM1PmBHltFAn1repoNgn/tuRhq8Unb0+uyMDixHhfjTekx3ZV/LVq2SCtmvu26cjMxXQr1SMtrcjXZiLva3uFkzn3OtEkmJFLpJUNWTLUcAnBtxKvv3rJ5v15M8a2Ev/pO0LlEnu2/bAbasVrjl8BqJ5W/42jPtQAHd7m8Qoq/heUAb+oyZkKRcJZzA7vrkZEOYYMdpHLe/c1FZ2E7XyxniXaEXK8zP3xY86dLown1/hhnLkPmyGEh1YS6mvNHIO8pqUCBDVTRGBZ2//EWtRNDNEPMGXYoizyqzz6Z45RceuSs2fMwlTz6M1+4ES7co5HetDzxKl/UXmnvIcgCPxcIP2zWdewrbm0Zr9MovdiVfqDKOVMlzUrcGBjQxRMVqzH9IY2k8rdZD9FpfT1i2PlK4b7ohbhXuufMM579z1PvIfILnr0qwdQkTpuef8o0ximD8Su1VL0AH/qmS6JPtkLqq3a4DH/OGbG4oDZqnpOt6waXuTckZGzVyDxgUIJHTbtxkOoTqLkq28vbUSbaSutZztFzauuK8H1Uj+sBCv+cjnmJ/zpX7abJqIWZ3eNSn1xH4oraVEjnkaC3JhGwC0yJG24hRDPM9UofzncrCG7TFDtsl9BqPlB9FZ/JcmHIecstcRMuyp80TwQSuiQaeI2vA0juw3trKq7PDFC3vXx39oC56NdUv6PwOwV39jK+n5wBYU08vrexSTGUAryD7FtMdtlCtirca3kDoBFjdV98V5ONSzvuCuuVVv7fSsN3pyG3Wn7NkpYdjmP4iTS/27arTomH/wZ5E63Pkh/Z0fQDKSTSIb5nn4UIYdjWuBPtYOVd5LknLFNBVac36wkdyry6CddOKr3romzf31fwE=")));
        }
    }
    Intl::addLang('fr_FR', 'Français (France)', 'flag-fr');
}

