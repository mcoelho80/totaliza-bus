# Script PHP que totaliza os boletins de urna fornecidos pelo TSE

## Objetivo

O objetivo deste script é comprovar de que não houve fraude durante a transmissão e apuração dos votos no 2o turno das eleições em 2014 no Brasil.

A premissa é simples: se todos os BUs (Boletins de Urna) até agora batem com os divulgados no TSE, a somatória destes BUs será o resultado da eleição.

## Requerimentos

PHP 5.3 ou superior

## Como utilizar

1. Faça o download dos boletins de urna em http://www.tse.jus.br/eleicoes/estatisticas/repositorio-de-dados-eleitorais
2. Descompacte o arquivo de cada estado e coloque no mesmo diretório do script.
3. Execute o script na linha de comando 'php totaliza-bus.php'.

## Resultado esperado

### Resultado AC (arquivo bweb_2t_AC_28102014114450.txt)

Candidato  | Votos
---------- | ----------
Dilma      |    138.982
Aecio      |    243.677
Brancos    |      3.480
Nulos      |      8.234

### Resultado AL (arquivo bweb_2t_AL_28102014114941.txt)

Candidato  | Votos
---------- | ----------
Dilma      |    941.445
Aecio      |    574.322
Brancos    |     25.003
Nulos      |     63.302

### Resultado AP (arquivo bweb_2t_AP_28102014115835.txt)

Candidato  | Votos
---------- | ----------
Dilma      |    227.509
Aecio      |    142.780
Brancos    |      3.183
Nulos      |     15.833

### Resultado AM (arquivo bweb_2t_AM_28102014115349.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  1.033.457
Aecio      |    556.545
Brancos    |     27.153
Nulos      |    106.262

### Resultado BA (arquivo bweb_2t_BA_28102014120236.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  5.059.860
Aecio      |  2.153.111
Brancos    |    109.113
Nulos      |    333.979

### Resultado CE (arquivo bweb_2t_CE_28102014120643.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  3.522.884
Aecio      |  1.068.169
Brancos    |     69.320
Nulos      |    246.882

### Resultado DF (arquivo bweb_2t_DF_28102014121036.txt)

Candidato  | Votos
---------- | ----------
Dilma      |    582.354
Aecio      |    946.171
Brancos    |     29.171
Nulos      |    103.434

### Resultado ES (arquivo bweb_2t_ES_28102014121431.txt)

Candidato  | Votos
---------- | ----------
Dilma      |    912.391
Aecio      |  1.065.485
Brancos    |     36.418
Nulos      |     63.418

### Resultado GO (arquivo bweb_2t_GO_28102014121839.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  1.365.964
Aecio      |  1.819.139
Brancos    |     56.035
Nulos      |    157.761

### Resultado MA (arquivo bweb_2t_MA_28102014122307.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  2.475.985
Aecio      |    667.823
Brancos    |     34.452
Nulos      |     87.584

### Resultado MT (arquivo bweb_2t_MT_28102014123633.txt)

Candidato  | Votos
---------- | ----------
Dilma      |    717.412
Aecio      |    865.610
Brancos    |     14.726
Nulos      |     34.888

### Resultado MS (arquivo bweb_2t_MS_28102014123155.txt)

Candidato  | Votos
---------- | ----------
Dilma      |    590.965
Aecio      |    762.797
Brancos    |     15.635
Nulos      |     28.486

### Resultado MG (arquivo bweb_2t_MG_28102014122730.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  5.981.162
Aecio      |  5.432.465
Brancos    |    176.052
Nulos      |    427.862

### Resultado PA (arquivo bweb_2t_PA_28102014124021.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  2.104.151
Aecio      |  1.561.066
Brancos    |     42.609
Nulos      |    171.106

### Resultado PB (arquivo bweb_2t_PB_28102014124426.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  1.381.305
Aecio      |    768.475
Brancos    |     43.722
Nulos      |    132.060

### Resultado PR (arquivo bweb_2t_PR_28102014125604.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  2.409.677
Aecio      |  3.769.054
Brancos    |     81.356
Nulos      |    157.545

### Resultado PE (arquivo bweb_2t_PE_28102014124827.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  3.438.829
Aecio      |  1.460.279
Brancos    |    102.054
Nulos      |    225.837

### Resultado PI (arquivo bweb_2t_PI_28102014125213.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  1.385.265
Aecio      |    384.157
Brancos    |     15.919
Nulos      |     61.345

### Resultado RJ (arquivo bweb_2t_RJ_28102014130047.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  4.489.860
Aecio      |  3.685.122
Brancos    |    261.629
Nulos      |    990.434

### Resultado RN (arquivo bweb_2t_RN_28102014130526.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  1.201.768
Aecio      |    516.487
Brancos    |     34.826
Nulos      |    163.332

### Resultado RS (arquivo bweb_2t_RS_28102014131811.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  2.998.545
Aecio      |  3.455.214
Brancos    |    146.601
Nulos      |    263.969

### Resultado RO (arquivo bweb_2t_RO_28102014130948.txt)

Candidato  | Votos
---------- | ----------
Dilma      |    364.213
Aecio      |    442.698
Brancos    |     10.005
Nulos      |     35.822

### Resultado RR (arquivo bweb_2t_RR_28102014131402.txt)

Candidato  | Votos
---------- | ----------
Dilma      |     97.425
Aecio      |    139.752
Brancos    |      2.270
Nulos      |     11.166

### Resultado SC (arquivo bweb_2t_SC_28102014132154.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  1.354.775
Aecio      |  2.472.142
Brancos    |     50.947
Nulos      |    115.084

### Resultado SP (arquivo bweb_2t_SP_28102014133018.txt)

Candidato  | Votos
---------- | ----------
Dilma      |  8.492.620
Aecio      | 15.311.664
Brancos    |    501.035
Nulos      |  1.137.129

### Resultado SE (arquivo bweb_2t_SE_28102014132556.txt)

Candidato  | Votos
---------- | ----------
Dilma      |    772.482
Aecio      |    380.654
Brancos    |     19.090
Nulos      |     50.850

### Resultado TO (arquivo bweb_2t_TO_28102014133436.txt)

Candidato  | Votos
---------- | ----------
Dilma      |    428.774
Aecio      |    292.176
Brancos    |      6.856
Nulos      |     22.649

### Resultado Exterior (arquivo bweb_2t_ZZ_28102014133904.txt)

Candidato  | Votos
---------- | ----------
Dilma      |     31.059
Aecio      |    104.121
Brancos    |      3.159
Nulos      |      3.534

### Resultado GERAL (soma de todos os arquivos)

Candidato  | Votos
---------- | ----------
Dilma      | 54.501.118
Aecio      | 51.041.155
Brancos    |  1.921.819
Nulos      |  5.219.787

1.679.881 registros processados
