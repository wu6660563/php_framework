<?php
namespace Core\Mutex;

use App;

/**
 * ������
 *
 * ���ڴ����������Ķ���
 *
 * @package Core\Mutex
 */
class MutexFactory
{
    /**
     * ���������ļ�����
     *
     * @param bool|true $autoUnlock �Ƿ��Զ��ͷ���
     * @return FileMutex
     */
    public static function createFileMutex($autoUnlock = true)
    {
        return new FileMutex($autoUnlock);
    }

    /**
     * ���������ڴ����
     *
     * @param string $cacheType ��������
     * @param bool|true $autoUnlock �Ƿ��Զ��ͷ���
     * @return MemMutex
     */
    public static function createMemMutex($cacheType = '', $autoUnlock = true)
    {
        $mu = new MemMutex($autoUnlock);
        if (empty($cacheType)) {
            $mu->setCache(App::cache());
        } else {
            $mu->setCache(App::cache($cacheType));
        }
        return $mu;
    }

    /**
     * ��������MySQL����
     *
     * @param string $dbNode ���ݽڵ�
     * @param bool|true $autoUnlock �Ƿ��Զ��ͷ���
     * @return MysqlMutex
     */
    public static function createMysqlMutex($dbNode = '', $autoUnlock = true)
    {
        $mu = new MysqlMutex($autoUnlock);
        if (empty($dbNode)) {
            $mu->setDb(App::db());
        } else {
            $mu->setDb(App::db($dbNode));
        }
        return $mu;
    }
}
