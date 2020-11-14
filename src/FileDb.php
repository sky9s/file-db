<?php
/**
 * Created by PhpStorm.
 * User: Testuser
 * Date: 2020-11-10
 * Time: 오후 9:43
 */

namespace Sky9s\FileDb;

use Illuminate\Filesystem\Filesystem;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class FileDb extends Controller
{
    // 파일 인풋 컴포넌트가 일반 뷰에서 로딩되는지 테스트.
    public function loadTest()
    {
        return view('sky9s::load-test');
    }

    // 파일 테이블에 파일 정보를 임시로 저장해놓는다 (temp 필드에 값 1을 대입)
    public function uploadFiles(Request $request)
    {
        dump(Session::getId());
        dump($request);
        dump($request->request);

        dd($request->files->all());
    }

    // 비즈니스 로직 완료시 모델의 id 값을 파일 테이블에 저장 시킨다.
    // json 결과 반환 예정
    public function uploadFilesSuccess(Request $request)
    {
        $id = '';

        return $id;
    }

    public function showFiles()
    {
        $data = [];

        return $data;
    }
}