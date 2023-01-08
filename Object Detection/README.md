# 객체 인식
인상착의 정보가 있는 데이터셋으로 옷 인식을 학습했습니다.

## 활용 데이터셋
DeepFashion2 데이터셋을 사용 했습니다.
13개의 의류 카테고리, 학습 세트 (391K 이미지), 유효성 검사 세트 (34k 이미지) 및 테스트 세트 (67k 이미지)
[DeepFashion2 다운로드 받기](https://drive.google.com/drive/folders/125F48fsMBz2EF0Cpqk6aaHet5VH399Ok).  
해당 데이터셋 사용 시 사용하는 개발 환경 및 사용 모델에 따른 데이터 형식 변환이 필요.  
전이학습을 위해서 데이터셋을 Coco에 맞게 변환해야 합니다.  
Matlab에서 사용하기 위해서는 데이터셋을 열어서 학습시키기 위해 새로운 데이터 테이플을 생성해야 합니다.  
관련 코드들은 각각의 폴더에 존재합니다.  


## Matlab

로컬 GPU 사용

1. Pretrained Efficientnet을 활용한 DeepFashion2 재학습  
* 코드1: 전이학습을 위한 일련의 코드

2. Pretrained Yolov4를 활용한 DeepFashon2 재학습
* 코드1: 전이학습을 위한 일련의 코드
* 코드2: 실시간 객체인식 확인
--- 
