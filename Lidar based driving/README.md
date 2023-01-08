# Lidar based driving
MATLAB, ROS2 사용

# slam-path_planning
* ROS2 관련 문서 : https://docs.ros.org/en/foxy/index.html


### 진행예정과정 : 
#### 1. 라이다를 통해 얻은 laser scan 데이터를 이용해 SLAM으로 지도를 작성
#### 2. 작성한 그림을 mat파일로 변환한 후 경로탐색 스크립트에서 SLAM을 통해 작성한 지도에 해당하는 mat 파일을 이용해서 경로탐색 시작
#### 3. 알고리즘을 통해 계산된 경로를 따라서 Deepracer 이동
