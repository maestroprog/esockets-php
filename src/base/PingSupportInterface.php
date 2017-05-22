<?php

namespace Esockets\base;

/**
 * Описывает интерфейс класса, поддерживающего команду "пинг".
 * Реализовывать этот интерфейс можно как на уровне протокола,
 * так и на уровне соединения.
 * todo
 */
interface PingSupportInterface
{
    /**
     * Выполняет команду "пинг",
     * т.е. отправляет пинг-пакет удаленному сервису.
     * Функция не ждёт ответа от удаленного сервиса,
     * и ничего не возвращает.
     * Но класс, реализующий данный интерфейс,
     * при принятии Pong пакета должен вызывать специальный callback,
     * который передаётся в функцию @see PingSupportInterface::pong.
     *
     * @param PingPacket $pingPacket
     * @return void
     */
    public function ping(PingPacket $pingPacket);

    /**
     * Назначает специальный callback-обработчик пакетов "понг" от удаленного сервиса.
     * В данный callback будет передан один параметр типа @see PingPacket
     *
     * @param callable $pongReceived
     * @return void
     */
    public function pong(callable $pongReceived);
}
