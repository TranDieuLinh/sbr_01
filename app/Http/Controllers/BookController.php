<?php
/**
 * Created by PhpStorm.
 * User: VS9 X64Bit
 * Date: 08/04/2017
 * Time: 10:54 PM
 */

namespace App\Http\Controllers;

use App\Repositories\Contracts\BookRepositoryInterface;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\UserBookRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    protected $bookRepository;
    protected $categoryRepository;
    protected $userBookRepository;

    public function __construct(
        BookRepositoryInterface $bookRepository,
        CategoryRepositoryInterface $categoryRepository,
        UserBookRepositoryInterface $userBookRepository
    ) {
        parent::__construct();
        $this->bookRepository = $bookRepository;
        $this->categoryRepository = $categoryRepository;
        $this->userBookRepository = $userBookRepository;
    }

    public function show($id)
    {
        $book = $this->bookRepository->with(['reviews', 'markReads'])->find($id);
        $category = $this->categoryRepository->find($book->category_id)->name;
        if ($book->rate_count > 0) {
            $score = number_format($book->score / $book->rate_count, 2);
        } else {
            $score = 0;
        }
        $likes = $this->userBookRepository->findLikeByBookId($book->id);
        $sames = $this->bookRepository->theSameCategory($id, $book->category_id)
            ->paginate(config('settings.pagination.limit-sidebar'));

        $value = 0;
        if (!Auth::guest()) {
            $rate = $this->userBookRepository->findRate($book->id, Auth::user()->id)->first();
            if ($rate != null) {
                $value = $rate->rate;
            }
        }

        return view('pages.book-detail')->with(compact('category', 'book', 'score', 'likes', 'sames', 'value'));
    }
}
