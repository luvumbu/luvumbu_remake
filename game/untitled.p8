pico-8 cartridge // http://www.pico-8.com
version 38
__lua__
-- ndenga puissance 4
-- fullscreen + niveaux + ia attente

board={}
cols=7
rows=6
cell_w=128/cols
cell_h=128/rows

cursor=3
current_player=1
winner=0
menu=true
mode="humain"
level=1

-- gestion latence ia
ia_waiting=false
ia_wait_start=0

function _init()
 reset_game()
end

function reset_game()
 board={}
 for c=1,cols do
  board[c]={}
  for r=1,rows do
   board[c][r]=0
  end
 end
 cursor=3
 current_player=1
 winner=0
 ia_waiting=false
end

function _update()
 if menu then
  if btnp(⬅️) then mode="humain" end
  if btnp(➡️) then mode="ia" end
  if btnp(⬆️) then level=min(level+1,10) end
  if btnp(⬇️) then level=max(level-1,1) end
  if btnp(🅾️) then
   menu=false
   reset_game()
  end
 else
  if winner==0 then
   if current_player==1 or mode=="humain" then
    if btnp(⬅️) then cursor=max(1,cursor-1) end
    if btnp(➡️) then cursor=min(cols,cursor+1) end
    if btnp(🅾️) then play_turn(cursor) end
   elseif mode=="ia" and current_player==2 then
    if not ia_waiting then
     ia_waiting=true
     ia_wait_start=time()
    else
     if time()-ia_wait_start>=1 then
      ia_waiting=false
      ia_play()
     end
    end
   end
  else
   if btnp(🅾️) then
    menu=true
   end
  end
 end
end

function play_turn(c)
 for r=rows,1,-1 do
  if board[c][r]==0 then
   board[c][r]=current_player
   if check_win(c,r,current_player) then
    winner=current_player
    if winner==1 then
     level=min(10,level+1)
    end
   else
    current_player=3-current_player
    ia_waiting=false
   end
   return
  end
 end
end

function check_win(c,r,p)
 dirs={{1,0},{0,1},{1,1},{1,-1}}
 for d in all(dirs) do
  local count=1
  for i=1,3 do
   local nc, nr=c+d[1]*i, r+d[2]*i
   if inside(nc,nr) and board[nc][nr]==p then
    count+=1 else break
   end
  end
  for i=1,3 do
   local nc, nr=c-d[1]*i, r-d[2]*i
   if inside(nc,nr) and board[nc][nr]==p then
    count+=1 else break
   end
  end
  if count>=4 then return true end
 end
 return false
end

function inside(c,r)
 return c>=1 and c<=cols and r>=1 and r<=rows
end

-- ia avec niveaux
function ia_play()
 if level==1 then
  ia_random()
 else
  -- gagner si possible
  for c=1,cols do
   local r=find_row(c)
   if r>0 then
    board[c][r]=2
    if check_win(c,r,2) then
     board[c][r]=0
     play_turn(c)
     return
    end
    board[c][r]=0
   end
  end
  -- bloquer joueur
  for c=1,cols do
   local r=find_row(c)
   if r>0 then
    board[c][r]=1
    if check_win(c,r,1) then
     board[c][r]=0
     play_turn(c)
     return
    end
    board[c][r]=0
   end
  end
  -- stratれたgie selon niveau
  if level>=5 then
   if try_col(4) then return end
   if try_col(3) then return end
   if try_col(5) then return end
  end
  ia_random()
 end
end

function try_col(c)
 local r=find_row(c)
 if r>0 then
  play_turn(c)
  return true
 end
 return false
end

function ia_random()
 local choices={}
 for c=1,cols do
  if find_row(c)>0 then
   add(choices,c)
  end
 end
 if #choices>0 then
  local pick=choices[flr(rnd(#choices))+1]
  play_turn(pick)
 end
end

function find_row(c)
 for r=rows,1,-1 do
  if board[c][r]==0 then return r end
 end
 return 0
end

function _draw()
 cls()
 if menu then
  print("bienvenue ndenga",20,20,7)
  print("puissance 4",35,30,10)
  print("mode: "..mode,20,50,11)
  print("niveau: "..level,20,60,12)
  print("⬅️/➡️ choisir mode",5,80,6)
  print("⬆️/⬇️ niv. ia",5,90,6)
  print("🅾️ start",40,110,7)
 else
  draw_board()
  if winner!=0 then
   if winner==1 then
    print("bravo! niveau "..level,20,5,11)
   else
    print("perdu!",50,5,8)
   end
   print("🅾️ menu",40,115,7)
  elseif mode=="ia" and current_player==2 and ia_waiting then
   print("ia reflechit...",30,5,10)
  end
 end
end

function draw_board()
 for c=1,cols do
  for r=1,rows do
   local x=(c-1)*cell_w
   local y=(r-1)*cell_h
   rect(x,y,x+cell_w,y+cell_h,1)
   if board[c][r]==1 then
    circfill(x+cell_w/2,y+cell_h/2,cell_w/2-2,12)
   elseif board[c][r]==2 then
    circfill(x+cell_w/2,y+cell_h/2,cell_w/2-2,8)
   end
  end
 end
 if winner==0 and (current_player==1 or mode=="humain") then
  local x=(cursor-1)*cell_w+cell_w/2
  rectfill(x-4,0,x+4,4,10)
 end
end

__gfx__
00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
00700700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
00077000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
00077000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
00700700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
