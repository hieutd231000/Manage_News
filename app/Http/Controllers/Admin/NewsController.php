<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\News\NewRepositoryInterface;
use App\Repositories\Users\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    /**
     * @var NewRepositoryInterface
     * @var UserRepositoryInterface
     */
    protected $userRepository;
    protected $newRepository;

    public function __construct( UserRepositoryInterface $userRepository, NewRepositoryInterface $newRepository)
    {
        $this->userRepository = $userRepository;
        $this->newRepository = $newRepository;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $news = $this->newRepository->getAll(config("const.paginate"), "DESC");
        return view("admin.page.news.index", compact("news"));
    }

    /**
     * Delete news function
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function destroy(Request $request, $id)
    {
        $new = $this->newRepository->find($id);
        if(empty($new)) {
            return redirect()->back()->with("failed", trans("auth.empty"));
        }
        try {
            $this->newRepository->delete($new->id);
            return redirect()->back()->with("success", trans("auth.delete.success"));
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with("failed", trans("auth.delele.failed"));
        }
    }

    /**
     * Create News Form
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function createForm(Request $request)
    {
        return view("admin.page.news.create");
    }
}
