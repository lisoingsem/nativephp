import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../wayfinder'
/**
* @see \Native\Mobile\Http\Controllers\NativeCallController::__invoke
* @see vendor/nativephp/mobile/src/Http/Controllers/NativeCallController.php:9
* @route '/_native/api/call'
*/
const NativeCallController = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: NativeCallController.url(options),
    method: 'post',
})

NativeCallController.definition = {
    methods: ["post"],
    url: '/_native/api/call',
} satisfies RouteDefinition<["post"]>

/**
* @see \Native\Mobile\Http\Controllers\NativeCallController::__invoke
* @see vendor/nativephp/mobile/src/Http/Controllers/NativeCallController.php:9
* @route '/_native/api/call'
*/
NativeCallController.url = (options?: RouteQueryOptions) => {
    return NativeCallController.definition.url + queryParams(options)
}

/**
* @see \Native\Mobile\Http\Controllers\NativeCallController::__invoke
* @see vendor/nativephp/mobile/src/Http/Controllers/NativeCallController.php:9
* @route '/_native/api/call'
*/
NativeCallController.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: NativeCallController.url(options),
    method: 'post',
})

/**
* @see \Native\Mobile\Http\Controllers\NativeCallController::__invoke
* @see vendor/nativephp/mobile/src/Http/Controllers/NativeCallController.php:9
* @route '/_native/api/call'
*/
const NativeCallControllerForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: NativeCallController.url(options),
    method: 'post',
})

/**
* @see \Native\Mobile\Http\Controllers\NativeCallController::__invoke
* @see vendor/nativephp/mobile/src/Http/Controllers/NativeCallController.php:9
* @route '/_native/api/call'
*/
NativeCallControllerForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: NativeCallController.url(options),
    method: 'post',
})

NativeCallController.form = NativeCallControllerForm

export default NativeCallController