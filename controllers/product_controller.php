<?php
include_once (dirname(__FILE__)).'/../classes/product_class.php';


//function to add new author
function add_author($name){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->add_author($name);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function display_authors_fxn(){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->display_authors();

    if($run_query){
        while($record = $product_object->db_fetch()){
            $author_arr[] = $record;
        }
        return $author_arr;
    }else{
        return false;
    }
}

function display_one_author($id){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->display_one_author($id);

    if($run_query){
        $author_arr = $product_object->db_fetch();
        return $author_arr;
    }else{
        return false;
    }
}

function update_author_fxn($id,$name){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->update_author($id, $name);

    if ($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function delete_author_fxn($id){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->delete_author($id);

    if ($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function add_genre_fxn($name){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->add_genre($name);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function display_genres_fxn(){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->display_genres();

    if($run_query){
        while($record = $product_object->db_fetch()){
            $genre_arr[] = $record;
        }
        return $genre_arr;
    }else{
        return false;
    }
}

function display_one_genre($id){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->display_one_genre($id);

    if($run_query){
        $genre_arr = $product_object->db_fetch();
        return $genre_arr;
    }else{
        return false;
    }
}

function update_genre_fxn($id,$name){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->update_genre($id, $name);

    if ($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function delete_genre_fxn($id){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->delete_genre($id);

    if ($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function add_book_fxn($genre,$author,$title,$price,$desc,$img,$publisher,$pub_year,$stock){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->add_book($genre,$author,$title,$price,$desc,$img,$publisher,$pub_year,$stock);

    if ($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function display_books_fxn(){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->display_books();

    if($run_query){
        while($record = $product_object->db_fetch()){
            $books_arr[] = $record;
        }
        return $books_arr;
    }else{
        return false;
    }
}

function display_one_book_fxn($id){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->display_one_book($id);

    if($run_query){
        $books_arr = $product_object->db_fetch();
        return $books_arr;
    }else{
        return false;
    }
}

function update_book_fxn($isbn,$genre,$author,$title,$price,$desc,$img,$publisher,$pub_year,$stock){
   $product_object = new product_class;

    //run the query
    $run_query = $product_object->update_book($isbn,$genre,$author,$title,$price,$desc,$img,$publisher,$pub_year,$stock);

    if ($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function delete_book_fxn($isbn){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->delete_book($isbn);

    if ($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function search_for_book_fxn($search_term){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->search_for_book($search_term);
    $books_arr = array();
    if($run_query){
        while($record = $product_object->db_fetch()){
            $books_arr[] = $record;
        }
        return $books_arr;
    }else{
        return false;
    }
}

function display_book_per_genre_fxn($genre_id){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->display_book_per_genre($genre_id);
    $books_arr = array();
    if($run_query){
        while($record = $product_object->db_fetch()){
            $books_arr[] = $record;
        }
        return $books_arr;
    }else{
        return false;
    }
}

function shop_by_genre_fxn($genre){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->shop_by_genre($genre);
    $books_arr = array();
    if($run_query){
        while($record = $product_object->db_fetch()){
            $books_arr[] = $record;
        }
        return $books_arr;
    }else{
        return false;
    }
}

function shop_by_author_fxn($author){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->shop_by_author($author);
    $books_arr = array();
    if($run_query){
        while($record = $product_object->db_fetch()){
            $books_arr[] = $record;
        }
        return $books_arr;
    }else{
        return false;
    }
}

function insert_book_review_fxn($user_id, $isbn, $review, $book_title, $date){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->insert_book_review($user_id, $isbn, $review, $book_title, $date);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function show_book_reviews_fxn($isbn){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->show_book_reviews($isbn);
    $review_arr = array();
    if($run_query){
        while($record = $product_object->db_fetch()){
            $review_arr[] = $record;
        }
        return $review_arr;
    }else{
        return false;
    }
}

function count_review_rows_fxn(){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->count_review_rows();
    $review_arr = array();
    if($run_query){
        while($record = $product_object->db_fetch()){
            $review_arr = $record;
        }
        return $review_arr;
    }else{
        return false;
    }
}

function show_user_book_reviews_fxn($user_id){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->show_user_book_reviews($user_id);
    $review_arr = array();
    if($run_query){
        while($record = $product_object->db_fetch()){
            $review_arr[] = $record;
        }
        return $review_arr;
    }else{
        return false;
    }
}

function delete_book_review_fxn($review_id){
    $product_object = new product_class;

    //run the query
    $run_query = $product_object->delete_book_review($review_id);
    if($run_query){
        return $run_query;
        }    
    else{
        return false;
    }
}

?>
