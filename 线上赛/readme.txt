8001:web-cbc: �ֽڷ�ת����
��Դ������ע�� tip:index.txt ��΢�����Ѷ�

8002:iscc_collide: �ֽ���չ����
��

80003:iscc2018-1: Strcmp()����©��
��

8004:iscc2018-2: ipα��
ɾ��2.php�ļ�
����header("content-type:text/html;charset=utf-8");�����������

80005:Web-01: PHP������md5��֤�ƹ�������ȫ�ֱ���GLOBALS��ȡ����
�ĵ����� payload��?a=GLOBALS

8006:Web-02: ����phpαЭ��
���ļ����Ƶ�һ��Ŀ¼ ����docker build ./ ����docker����
����֮������������ ע��ѡlatest�Ǹ�
Ȼ��docker run -dit --name Web-02 -p �˿�:80 ����ID����

8007:Web-03:  д�����ļ���������ִ��
�ļ�roboot.txt ���� robots.txt 
ɾ��1.php

8008:Web-04:����phpαЭ��
��

8009:Web-05:PHP���
��

####:Web-06: 
û�в�����Ҫwindows����

8010:SW01:+string-ΪUTF-7���������
�ļ�����Ϊindex.php ���Ұ������actionҲ�ĳ�index.php

8011:SW02:����ʱ���äע������Ҫ�µ��û�����test.Ȼ������sqlmap�ܣ�ֱ�ӵõ�flag
��Ҫ����docker mysql�������ݿ�sqli_database���������ݿ��ļ���֮��ɾ�����ݿ��ļ���
�޸�index.php�ļ��е����ݿ�������Ϣ��

8012:SW03: ������
��

8013:W01: ����ipα��
��

8014:W02:������
��

####:W03:
û��ѹ������ Դ�����޷�����

8015:W04:���ֽ�ע�룬����ҳ����Ϊgbkʱ����
ͬSW02�Ĳ��𷽷�����Ҫ�Ƚ���baji���ݿ⣬Ȼ����sql��ɾ��sql�ļ�
�޸�index.php�����mysql��Ϣ.
�޸�php html mysql �ı����ʽΪgbk ���ֱ���2 ��7 �� 53��

8016:W05: ����HTTPͷ��֪ʶ��BASE64����
��

8017:W06: PHP�������
��

8018:W07:����ִ���ƹ�
����exec1.php����Ϊindex.php,����777Ȩ��
apt install iputils-ping ��װping����

8019:W08: SQLע��
��Ҫ����sql�ļ�������Ҫ�Լ��������ݿ⣬����֮��ɾ��sql�ļ�
��include/conf.php���޸����ݿ�������Ϣ�����޸�mysql_connect����Ϊmysqli_connect����
10�и�Ϊ mysqli_select_db($connect,$db) or die("error , failed");
18�и�Ϊ  $result=mysqli_query($connect ,$query);
20�и�Ϊ if ($row = mysqli_fetch_array($result)){


8020:W09:
�������ݿ�
����sql�ļ���ɾ��sql�ļ�
�޸�config.php��������Ϣ
�޸�web.tar.gz�е�config.php�е�flag�ֶ�