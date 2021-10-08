

登陆账户 data.access_token

```
curl 'https://apif.bjjnts.cn/account/login' \
  -H 'Connection: keep-alive' \
  -H 'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"' \
  -H 'Accept: application/json, text/plain, */*' \
  -H 'X-Client-Type: pc' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36' \
  -H 'Content-Type: application/json' \
  -H 'Origin: https://www.bjjnts.cn' \
  -H 'Sec-Fetch-Site: same-site' \
  -H 'Sec-Fetch-Mode: cors' \
  -H 'Sec-Fetch-Dest: empty' \
  -H 'Referer: https://www.bjjnts.cn/user/login' \
  -H 'Accept-Language: zh-CN,zh;q=0.9,en;q=0.8' \
  --data-raw '{"username":"xxxxxxxxxx","password":"xxxxxx","type":1}' \
  --compressed
```


获取课程 data[0].courseMap

```
curl 'https://apif.bjjnts.cn/student-center/study' \
  -H 'Connection: keep-alive' \
  -H 'Pragma: no-cache' \
  -H 'Cache-Control: no-cache' \
  -H 'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"' \
  -H 'Accept: application/json, text/plain, */*' \
  -H 'Authorization: Bearer fUv7Sb-sP-bsUcdzaZDYh7ccvmxCOdI--1627977583' \
  -H 'X-Client-Type: pc' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36' \
  -H 'Content-Type: application/json' \
  -H 'Origin: https://www.bjjnts.cn' \
  -H 'Sec-Fetch-Site: same-site' \
  -H 'Sec-Fetch-Mode: cors' \
  -H 'Sec-Fetch-Dest: empty' \
  -H 'Referer: https://www.bjjnts.cn/mine/student/study' \
  -H 'Accept-Language: zh-CN,zh;q=0.9,en;q=0.8' \
  --compressed
```


获取章节 data.courses	

```
curl 'https://apif.bjjnts.cn/courses/test-preview?course_id=732&class_id=12473' \
  -H 'Connection: keep-alive' \
  -H 'Pragma: no-cache' \
  -H 'Cache-Control: no-cache' \
  -H 'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"' \
  -H 'Accept: application/json, text/plain, */*' \
  -H 'Authorization: Bearer fUv7Sb-sP-bsUcdzaZDYh7ccvmxCOdI--1627977583' \
  -H 'X-Client-Type: pc' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36' \
  -H 'Content-Type: application/json' \
  -H 'Origin: https://www.bjjnts.cn' \
  -H 'Sec-Fetch-Site: same-site' \
  -H 'Sec-Fetch-Mode: cors' \
  -H 'Sec-Fetch-Dest: empty' \
  -H 'Referer: https://www.bjjnts.cn/study?course_id=732&class_id=12473' \
  -H 'Accept-Language: zh-CN,zh;q=0.9,en;q=0.8' \
  --compressed
```


获取视频 data.id

```
curl 'https://apif.bjjnts.cn/course-units/12485?class_id=12473' \
  -H 'Connection: keep-alive' \
  -H 'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"' \
  -H 'Accept: application/json, text/plain, */*' \
  -H 'Authorization: Bearer 64pA1I5hcnvFII0m3VnGBvwvfOf8UQsH-1627984722' \
  -H 'X-Client-Type: pc' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36' \
  -H 'Content-Type: application/json' \
  -H 'Origin: https://www.bjjnts.cn' \
  -H 'Sec-Fetch-Site: same-site' \
  -H 'Sec-Fetch-Mode: cors' \
  -H 'Sec-Fetch-Dest: empty' \
  -H 'Referer: https://www.bjjnts.cn/study/video?class_id=12473&course_id=731&unit_id=12485' \
  -H 'Accept-Language: zh-CN,zh;q=0.9,en;q=0.8' \
  --compressed
```


记录学习时长

```
curl 'https://apif.bjjnts.cn/studies?video_id=12432&u=10448363&time=660&unit_id=12481&class_id=12473' \
  -X 'POST' \
  -H 'Connection: keep-alive' \
  -H 'Content-Length: 0' \
  -H 'Pragma: no-cache' \
  -H 'Cache-Control: no-cache' \
  -H 'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"' \
  -H 'Accept: application/json, text/plain, */*' \
  -H 'Authorization: Bearer fUv7Sb-sP-bsUcdzaZDYh7ccvmxCOdI--1627977583' \
  -H 'X-Client-Type: pc' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36' \
  -H 'Content-Type: application/json' \
  -H 'Origin: https://www.bjjnts.cn' \
  -H 'Sec-Fetch-Site: same-site' \
  -H 'Sec-Fetch-Mode: cors' \
  -H 'Sec-Fetch-Dest: empty' \
  -H 'Referer: https://www.bjjnts.cn/study/video?class_id=12473&course_id=730&unit_id=12481' \
  -H 'Accept-Language: zh-CN,zh;q=0.9,en;q=0.8' \
  --compressed

```

人机验证

```
curl 'https://apif.bjjnts.cn/supervises/smart' \
  -H 'Connection: keep-alive' \
  -H 'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"' \
  -H 'Accept: application/json, text/plain, */*' \
  -H 'Authorization: Bearer zrb6-hdFJzIGs2eLQuJW3I-EBAH5Ej5N-1627970845' \
  -H 'X-Client-Type: pc' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36' \
  -H 'Content-Type: application/json' \
  -H 'Origin: https://www.bjjnts.cn' \
  -H 'Sec-Fetch-Site: same-site' \
  -H 'Sec-Fetch-Mode: cors' \
  -H 'Sec-Fetch-Dest: empty' \
  -H 'Referer: https://www.bjjnts.cn/study/video?class_id=12473&course_id=1194&unit_id=18947' \
  -H 'Accept-Language: zh-CN,zh;q=0.9' \
  --data-raw '{"course_id":"1194","unit_id":"18947","class_id":"12473"}' \
  --compressed
```

人脸识别

```
curl 'https://apif.bjjnts.cn/supervises' \
  -H 'Connection: keep-alive' \
  -H 'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"' \
  -H 'Accept: application/json, text/plain, */*' \
  -H 'Authorization: Bearer zrb6-hdFJzIGs2eLQuJW3I-EBAH5Ej5N-1627970845' \
  -H 'X-Client-Type: pc' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36' \
  -H 'Content-Type: application/json' \
  -H 'Origin: https://www.bjjnts.cn' \
  -H 'Sec-Fetch-Site: same-site' \
  -H 'Sec-Fetch-Mode: cors' \
  -H 'Sec-Fetch-Dest: empty' \
  -H 'Referer: https://www.bjjnts.cn/study/video?class_id=12473&course_id=733&unit_id=12493' \
  -H 'Accept-Language: zh-CN,zh;q=0.9' \
  --data-raw '{"baseImage":"","course_id":"733","unit_id":"12493","class_id":"12473"}' \
  --compressed
```
