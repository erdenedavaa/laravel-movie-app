@extends('layouts.main')

@section('content')
  <div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        Popular Movies
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-8">
          <a href="#">
            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" 
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/sonic.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/frozen2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/sonic.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/frozen2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>

      </div>
    </div> <!-- End popular-movies -->
    <div class="now-playing-movies py-24"> <!-- Start of Now Playing -->
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        Now Playing
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-8">
          <a href="#">
            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/sonic.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/frozen2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/sonic.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/frozen2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 01-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 01.56-1.71l6.05-.88 2.7-5.48a1 1 0 011.8 0l2.7 5.48 6.06.88a1 1 0 01.55 1.7l-4.38 4.27 1.04 6.03a1 1 0 01-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 01.93 0l4.08 2.15-.78-4.55a1 1 0 01.29-.88l3.3-3.22-4.56-.67a1 1 0 01-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 01-.75.54l-4.57.67 3.3 3.22a1 1 0 01.3.88l-.79 4.55 4.09-2.15z"/></svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Feb 20, 2020</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>

      </div>
    </div> <!-- End of Now Playing -->>
  </div>
@endsection