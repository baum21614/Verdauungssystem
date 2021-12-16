public class Sparschwein{
    int guthaben;
    Sparschwein(int betrag){
        guthaben = betrag;
    }
    void setzeGuthaben(int neuBetrag){
        guthaben = neuBetrag;
    }
    int gibGuthaben(){
        return guthaben;
    }
    void geldEinwefen(){
        guthaben = guthaben + 10;
    }
    boolean guthabenNiedrig(){
        if(guthaben <= 5){
            return true;
        }else{
            return false;
        }
    }
    void guthabenErhöhen(){
        if(guthaben <= 5){
            guthaben = guthaben + 10;
        }
    }
    void prüfeGuthaben(int betrag){

    }
}