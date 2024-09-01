<?php

namespace AlessandroBertozzi\CriticalEdition\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use LaravelJsonApi\Laravel\Http\Controllers\Actions;

/**
 * @OA\Get(
 *      path="/api/v1/critical-editions",
 *      summary="Retrieve all critical editions",
 *      description="This endpoint returns all the critical editions.",
 *      tags={"Critical Editions"},
 *      security={{"passport": {}}},
 *      @OA\Response(
 *          response=200,
 *          description="Successful response",
 *          @OA\MediaType(
 *              mediaType="application/vnd.api+json"
 *          )
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Unauthorized"
 *      )
 *  )
 * @OA\Get(
 *      path="/api/v1/critical-editions/{critical-editions}",
 *      summary="Retrieve a single critical edition",
 *      description="This endpoint returns a specific critical edition.",
 *      tags={"Critical Editions"},
 *      security={{"passport": {}}},
 *      @OA\Parameter(
 *          name="critical-editions",
 *          in="path",
 *          required=true,
 *          description="ID of the critical edition",
 *          @OA\Schema(
 *              type="string",
 *              example="1"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Successful response",
 *          @OA\MediaType(
 *              mediaType="application/vnd.api+json"
 *          )
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Unauthorized"
 *      ),
 *      @OA\Response(
 *          response=404,
 *          description="Critical edition not found"
 *      )
 *  )
 * @OA\Post(
 *       path="/api/v1/critical-editions",
 *       summary="Create a critical edition",
 *       description="This endpoint creates a new critical edition.",
 *       tags={"Critical Editions"},
 *       security={{"passport": {}}},
 *       @OA\RequestBody(
 *           required=true,
 *           @OA\MediaType(
 *               mediaType="application/vnd.api+json",
 *               @OA\Schema(
 *                   type="object",
 *                   @OA\Property(
 *                       property="data",
 *                       type="object",
 *                       @OA\Property(
 *                           property="type",
 *                           type="string",
 *                           example="critical-editions"
 *                       ),
 *                       @OA\Property(
 *                           property="attributes",
 *                           type="object",
 *                           @OA\Property(
 *                               property="title",
 *                               type="string",
 *                               example="test inserimento"
 *                           ),
 *                           @OA\Property(
 *                               property="description",
 *                               type="string",
 *                               example="Testo descrittivo"
 *                           )
 *                       ),
 *                       @OA\Property(
 *                           property="relationships",
 *                           type="object",
 *                           @OA\Property(
 *                               property="project",
 *                               type="object",
 *                               @OA\Property(
 *                                   property="data",
 *                                   type="object",
 *                                   @OA\Property(
 *                                       property="type",
 *                                       type="string",
 *                                       example="projects"
 *                                   ),
 *                                   @OA\Property(
 *                                       property="id",
 *                                       type="string",
 *                                       example="8"
 *                                   )
 *                               )
 *                           )
 *                       )
 *                   )
 *               )
 *           )
 *       ),
 *       @OA\Response(
 *           response=201,
 *           description="Critical edition created successfully",
 *           @OA\MediaType(
 *               mediaType="application/vnd.api+json"
 *           )
 *       ),
 *       @OA\Response(
 *           response=400,
 *           description="Bad Request"
 *       ),
 *       @OA\Response(
 *           response=401,
 *           description="Unauthorized"
 *       )
 *  )
 * @OA\Get(
 *      path="/api/v1/critical-editions/{critical-editions}/manuscripts",
 *      summary="Retrieve all manuscripts used in a critical edition",
 *      description="This endpoint returns all manuscripts related to a crical edition",
 *      tags={"Critical Editions"},
 *      security={{"passport": {}}},
 *      @OA\Parameter(
 *          name="critical-editions",
 *          in="path",
 *          required=true,
 *          description="ID of the critical edition",
 *          @OA\Schema(
 *              type="string",
 *              example="1"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Successful response",
 *          @OA\MediaType(
 *              mediaType="application/vnd.api+json"
 *          )
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Unauthorized"
 *      )
 *  )
 * @OA\Get(
 *      path="/api/v1/critical-editions/{critical-editions}/project",
 *      summary="Retrieve the project that contains a critical edition",
 *      description="This endpoint returns the project which is contained the selected critical edition",
 *      tags={"Critical Editions"},
 *      security={{"passport": {}}},
 *      @OA\Parameter(
 *          name="critical-editions",
 *          in="path",
 *          required=true,
 *          description="ID of the critical edition",
 *          @OA\Schema(
 *              type="string",
 *              example="1"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Successful response",
 *          @OA\MediaType(
 *              mediaType="application/vnd.api+json"
 *          )
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Unauthorized"
 *      )
 *  )
 */
class CriticalEditionController extends Controller
{

    use Actions\FetchMany;
    use Actions\FetchOne;
    use Actions\Store;
    use Actions\Update;
    use Actions\Destroy;
    use Actions\FetchRelated;
    use Actions\FetchRelationship;
    use Actions\UpdateRelationship;
    use Actions\AttachRelationship;
    use Actions\DetachRelationship;

}
