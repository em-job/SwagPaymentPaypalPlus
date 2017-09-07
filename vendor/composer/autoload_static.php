<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1cf2d9a3b3da8dc88a3d8f83d7930755
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Stream\\' => 18,
            'GuzzleHttp\\Ring\\' => 16,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'GuzzleHttp\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/streams/src',
        ),
        'GuzzleHttp\\Ring\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/ringphp/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'GuzzleHttp\\BatchResults' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BatchResults.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Collection' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Collection.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Event\\AbstractEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractEvent.php',
        'GuzzleHttp\\Event\\AbstractRequestEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractRequestEvent.php',
        'GuzzleHttp\\Event\\AbstractRetryableEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractRetryableEvent.php',
        'GuzzleHttp\\Event\\AbstractTransferEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractTransferEvent.php',
        'GuzzleHttp\\Event\\BeforeEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/BeforeEvent.php',
        'GuzzleHttp\\Event\\CompleteEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/CompleteEvent.php',
        'GuzzleHttp\\Event\\Emitter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/Emitter.php',
        'GuzzleHttp\\Event\\EmitterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EmitterInterface.php',
        'GuzzleHttp\\Event\\EndEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EndEvent.php',
        'GuzzleHttp\\Event\\ErrorEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ErrorEvent.php',
        'GuzzleHttp\\Event\\EventInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EventInterface.php',
        'GuzzleHttp\\Event\\HasEmitterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/HasEmitterInterface.php',
        'GuzzleHttp\\Event\\HasEmitterTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/HasEmitterTrait.php',
        'GuzzleHttp\\Event\\ListenerAttacherTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ListenerAttacherTrait.php',
        'GuzzleHttp\\Event\\ProgressEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ProgressEvent.php',
        'GuzzleHttp\\Event\\RequestEvents' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/RequestEvents.php',
        'GuzzleHttp\\Event\\SubscriberInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/SubscriberInterface.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\CouldNotRewindStreamException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/CouldNotRewindStreamException.php',
        'GuzzleHttp\\Exception\\ParseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ParseException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\StateException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/StateException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\Exception\\XmlParseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/XmlParseException.php',
        'GuzzleHttp\\HasDataTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HasDataTrait.php',
        'GuzzleHttp\\Message\\AbstractMessage' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/AbstractMessage.php',
        'GuzzleHttp\\Message\\AppliesHeadersInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/AppliesHeadersInterface.php',
        'GuzzleHttp\\Message\\FutureResponse' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/FutureResponse.php',
        'GuzzleHttp\\Message\\MessageFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageFactory.php',
        'GuzzleHttp\\Message\\MessageFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageFactoryInterface.php',
        'GuzzleHttp\\Message\\MessageInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageInterface.php',
        'GuzzleHttp\\Message\\MessageParser' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageParser.php',
        'GuzzleHttp\\Message\\Request' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/Request.php',
        'GuzzleHttp\\Message\\RequestInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/RequestInterface.php',
        'GuzzleHttp\\Message\\Response' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/Response.php',
        'GuzzleHttp\\Message\\ResponseInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/ResponseInterface.php',
        'GuzzleHttp\\Mimetypes' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Mimetypes.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\Post\\MultipartBody' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/MultipartBody.php',
        'GuzzleHttp\\Post\\PostBody' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostBody.php',
        'GuzzleHttp\\Post\\PostBodyInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostBodyInterface.php',
        'GuzzleHttp\\Post\\PostFile' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostFile.php',
        'GuzzleHttp\\Post\\PostFileInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostFileInterface.php',
        'GuzzleHttp\\Query' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Query.php',
        'GuzzleHttp\\QueryParser' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/QueryParser.php',
        'GuzzleHttp\\RequestFsm' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestFsm.php',
        'GuzzleHttp\\RingBridge' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RingBridge.php',
        'GuzzleHttp\\Ring\\Client\\ClientUtils' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/ClientUtils.php',
        'GuzzleHttp\\Ring\\Client\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlFactory.php',
        'GuzzleHttp\\Ring\\Client\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlHandler.php',
        'GuzzleHttp\\Ring\\Client\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlMultiHandler.php',
        'GuzzleHttp\\Ring\\Client\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/Middleware.php',
        'GuzzleHttp\\Ring\\Client\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/MockHandler.php',
        'GuzzleHttp\\Ring\\Client\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/StreamHandler.php',
        'GuzzleHttp\\Ring\\Core' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Core.php',
        'GuzzleHttp\\Ring\\Exception\\CancelledException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/CancelledException.php',
        'GuzzleHttp\\Ring\\Exception\\CancelledFutureAccessException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/CancelledFutureAccessException.php',
        'GuzzleHttp\\Ring\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/ConnectException.php',
        'GuzzleHttp\\Ring\\Exception\\RingException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/RingException.php',
        'GuzzleHttp\\Ring\\Future\\BaseFutureTrait' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/BaseFutureTrait.php',
        'GuzzleHttp\\Ring\\Future\\CompletedFutureArray' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/CompletedFutureArray.php',
        'GuzzleHttp\\Ring\\Future\\CompletedFutureValue' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/CompletedFutureValue.php',
        'GuzzleHttp\\Ring\\Future\\FutureArray' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureArray.php',
        'GuzzleHttp\\Ring\\Future\\FutureArrayInterface' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureArrayInterface.php',
        'GuzzleHttp\\Ring\\Future\\FutureInterface' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureInterface.php',
        'GuzzleHttp\\Ring\\Future\\FutureValue' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureValue.php',
        'GuzzleHttp\\Ring\\Future\\MagicFutureTrait' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/MagicFutureTrait.php',
        'GuzzleHttp\\Stream\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/AppendStream.php',
        'GuzzleHttp\\Stream\\AsyncReadStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/AsyncReadStream.php',
        'GuzzleHttp\\Stream\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/BufferStream.php',
        'GuzzleHttp\\Stream\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/CachingStream.php',
        'GuzzleHttp\\Stream\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/DroppingStream.php',
        'GuzzleHttp\\Stream\\Exception\\CannotAttachException' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Exception/CannotAttachException.php',
        'GuzzleHttp\\Stream\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Exception/SeekException.php',
        'GuzzleHttp\\Stream\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/FnStream.php',
        'GuzzleHttp\\Stream\\GuzzleStreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/streams/src/GuzzleStreamWrapper.php',
        'GuzzleHttp\\Stream\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/InflateStream.php',
        'GuzzleHttp\\Stream\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/LazyOpenStream.php',
        'GuzzleHttp\\Stream\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/LimitStream.php',
        'GuzzleHttp\\Stream\\MetadataStreamInterface' => __DIR__ . '/..' . '/guzzlehttp/streams/src/MetadataStreamInterface.php',
        'GuzzleHttp\\Stream\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/NoSeekStream.php',
        'GuzzleHttp\\Stream\\NullStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/NullStream.php',
        'GuzzleHttp\\Stream\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/PumpStream.php',
        'GuzzleHttp\\Stream\\Stream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Stream.php',
        'GuzzleHttp\\Stream\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/streams/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Stream\\StreamInterface' => __DIR__ . '/..' . '/guzzlehttp/streams/src/StreamInterface.php',
        'GuzzleHttp\\Stream\\Utils' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Utils.php',
        'GuzzleHttp\\Subscriber\\Cookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Cookie.php',
        'GuzzleHttp\\Subscriber\\History' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/History.php',
        'GuzzleHttp\\Subscriber\\HttpError' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/HttpError.php',
        'GuzzleHttp\\Subscriber\\Mock' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Mock.php',
        'GuzzleHttp\\Subscriber\\Prepare' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Prepare.php',
        'GuzzleHttp\\Subscriber\\Redirect' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Redirect.php',
        'GuzzleHttp\\ToArrayInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ToArrayInterface.php',
        'GuzzleHttp\\Transaction' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Transaction.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'GuzzleHttp\\Url' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Url.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'React\\Promise\\CancellablePromiseInterface' => __DIR__ . '/..' . '/react/promise/src/CancellablePromiseInterface.php',
        'React\\Promise\\CancellationQueue' => __DIR__ . '/..' . '/react/promise/src/CancellationQueue.php',
        'React\\Promise\\Deferred' => __DIR__ . '/..' . '/react/promise/src/Deferred.php',
        'React\\Promise\\Exception\\LengthException' => __DIR__ . '/..' . '/react/promise/src/Exception/LengthException.php',
        'React\\Promise\\ExtendedPromiseInterface' => __DIR__ . '/..' . '/react/promise/src/ExtendedPromiseInterface.php',
        'React\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/react/promise/src/FulfilledPromise.php',
        'React\\Promise\\LazyPromise' => __DIR__ . '/..' . '/react/promise/src/LazyPromise.php',
        'React\\Promise\\Promise' => __DIR__ . '/..' . '/react/promise/src/Promise.php',
        'React\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/react/promise/src/PromiseInterface.php',
        'React\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/react/promise/src/PromisorInterface.php',
        'React\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/react/promise/src/RejectedPromise.php',
        'React\\Promise\\UnhandledRejectionException' => __DIR__ . '/..' . '/react/promise/src/UnhandledRejectionException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1cf2d9a3b3da8dc88a3d8f83d7930755::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1cf2d9a3b3da8dc88a3d8f83d7930755::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1cf2d9a3b3da8dc88a3d8f83d7930755::$classMap;

        }, null, ClassLoader::class);
    }
}