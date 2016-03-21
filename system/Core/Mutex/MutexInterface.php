<?php
namespace Core\Mutex;

interface MutexInterface
{
    /**
     * ��ȡ��
     *
     * ��ȡ����Ϊ$name�������ɹ�����true��ʧ�ܷ���false��
     *
     * @param string $name ������
     * @param int $timeout �ȴ�ʱ��
     * @return bool
     */
    public function lock($name, $timeout = 0);

    /**
     * �ͷ���
     *
     * @param string $name ����
     * @return bool
     */
    public function unlock($name);

}
